<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Models\Visitor;

class TrackVisitors
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Skip tracking for certain routes/files
        if ($this->shouldSkipTracking($request)) {
            return $next($request);
        }

        $this->trackVisitor($request);

        return $next($request);
    }

    /**
     * Track the visitor
     */
    private function trackVisitor(Request $request)
    {
        $ipAddress = $request->ip();
        $userAgent = $request->userAgent();
        $currentUrl = $request->fullUrl();
        $sessionId = session()->getId();

        // Check if this is the same visitor (same IP and session) within last 30 minutes
        $existingVisitor = Visitor::where('ip_address', $ipAddress)
            ->where('session_id', $sessionId)
            ->where('last_activity', '>', now()->subMinutes(30))
            ->first();

        if ($existingVisitor) {
            // Update existing visitor
            $existingVisitor->increment('page_views');
            $existingVisitor->update([
                'page_visited' => $request->path(),
                'last_activity' => now()
            ]);
        } else {
            // Create new visitor record
            Visitor::create([
                'ip_address' => $ipAddress,
                'user_agent' => $userAgent,
                'page_visited' => $request->path(),
                'referrer' => $request->header('referer'),
                'country' => $this->getCountryFromIp($ipAddress),
                'device_type' => $this->getDeviceType($userAgent),
                'browser' => $this->getBrowser($userAgent),
                'operating_system' => $this->getOperatingSystem($userAgent),
                'is_bot' => $this->isBot($userAgent),
                'session_id' => $sessionId,
                'page_views' => 1,
                'first_visit' => now(),
                'last_activity' => now()
            ]);
        }
    }

    /**
     * Determine if tracking should be skipped
     */
    private function shouldSkipTracking(Request $request): bool
    {
        $skipPaths = [
            'sitemap.xml',
            'robots.txt',
            'favicon.ico',
            'storage',
            'build',
            'hot',
            '_ignition'
        ];

        $currentPath = $request->path();

        foreach ($skipPaths as $skipPath) {
            if (str_contains($currentPath, $skipPath)) {
                return true;
            }
        }

        return false;
    }

    /**
     * Get device type from user agent
     */
    private function getDeviceType(string $userAgent): string
    {
        if (preg_match('/mobile|android|iphone|ipad|phone/i', $userAgent)) {
            return 'mobile';
        }

        if (preg_match('/tablet|ipad/i', $userAgent)) {
            return 'tablet';
        }

        return 'desktop';
    }

    /**
     * Get browser from user agent
     */
    private function getBrowser(string $userAgent): string
    {
        if (strpos($userAgent, 'Chrome') !== false) {
            return 'Chrome';
        }
        if (strpos($userAgent, 'Firefox') !== false) {
            return 'Firefox';
        }
        if (strpos($userAgent, 'Safari') !== false) {
            return 'Safari';
        }
        if (strpos($userAgent, 'Edge') !== false) {
            return 'Edge';
        }

        return 'Unknown';
    }

    /**
     * Get operating system from user agent
     */
    private function getOperatingSystem(string $userAgent): string
    {
        if (strpos($userAgent, 'Windows') !== false) {
            return 'Windows';
        }
        if (strpos($userAgent, 'Mac') !== false) {
            return 'macOS';
        }
        if (strpos($userAgent, 'Linux') !== false) {
            return 'Linux';
        }
        if (strpos($userAgent, 'Android') !== false) {
            return 'Android';
        }
        if (strpos($userAgent, 'iOS') !== false) {
            return 'iOS';
        }

        return 'Unknown';
    }

    /**
     * Check if user agent is a bot
     */
    private function isBot(string $userAgent): bool
    {
        $botPatterns = [
            'bot', 'crawl', 'spider', 'search', 'google', 'bing', 'yahoo',
            'facebook', 'twitter', 'linkedin', 'pinterest', 'instagram'
        ];

        foreach ($botPatterns as $pattern) {
            if (stripos($userAgent, $pattern) !== false) {
                return true;
            }
        }

        return false;
    }

    /**
     * Get country from IP (basic implementation)
     * For production, consider using a service like MaxMind GeoIP
     */
    private function getCountryFromIp(string $ip): ?string
    {
        // For local development
        if ($ip === '127.0.0.1' || $ip === '::1') {
            return 'Local';
        }

        // You can integrate with a GeoIP service here
        // For now, return null
        return null;
    }
}
