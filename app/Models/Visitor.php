<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Visitor extends Model
{
    use HasFactory;

    protected $fillable = [
        'ip_address',
        'user_agent',
        'page_visited',
        'referrer',
        'country',
        'city',
        'device_type',
        'browser',
        'operating_system',
        'is_bot',
        'session_id',
        'page_views',
        'first_visit',
        'last_activity'
    ];

    protected $casts = [
        'is_bot' => 'boolean',
        'first_visit' => 'datetime',
        'last_activity' => 'datetime',
        'page_views' => 'integer'
    ];

    /**
     * Scope to filter out bots
     */
    public function scopeRealVisitors($query)
    {
        return $query->where('is_bot', false);
    }

    /**
     * Scope to get unique visitors
     */
    public function scopeUniqueVisitors($query)
    {
        return $query->distinct('ip_address');
    }

    /**
     * Scope to get visitors from today
     */
    public function scopeToday($query)
    {
        return $query->whereDate('created_at', today());
    }

    /**
     * Scope to get visitors from this week
     */
    public function scopeThisWeek($query)
    {
        return $query->whereBetween('created_at', [
            now()->startOfWeek(),
            now()->endOfWeek()
        ]);
    }

    /**
     * Scope to get visitors from this month
     */
    public function scopeThisMonth($query)
    {
        return $query->whereMonth('created_at', now()->month)
                     ->whereYear('created_at', now()->year);
    }

    /**
     * Get the most visited pages
     */
    public static function popularPages($limit = 10)
    {
        return self::select('page_visited', \DB::raw('count(*) as visits'))
                   ->where('is_bot', false)
                   ->groupBy('page_visited')
                   ->orderBy('visits', 'desc')
                   ->limit($limit)
                   ->get();
    }

    /**
     * Get visitor statistics
     */
    public static function getStats()
    {
        return [
            'total_visitors' => self::realVisitors()->count(),
            'unique_visitors' => self::realVisitors()->distinct('ip_address')->count(),
            'today_visitors' => self::realVisitors()->today()->count(),
            'this_week_visitors' => self::realVisitors()->thisWeek()->count(),
            'this_month_visitors' => self::realVisitors()->thisMonth()->count(),
            'total_page_views' => self::realVisitors()->sum('page_views'),
        ];
    }
}
