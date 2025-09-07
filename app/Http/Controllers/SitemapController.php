<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class SitemapController extends Controller
{
    public function index()
    {
        // Get current date for lastmod
        $currentDate = now()->format('Y-m-d');

        $sitemap = '<?xml version="1.0" encoding="UTF-8"?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9"
        xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"
        xsi:schemaLocation="http://www.sitemaps.org/schemas/sitemap/0.9
        http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd">

    <!-- Homepage -->
    <url>
        <loc>' . url('/') . '</loc>
        <lastmod>' . $currentDate . '</lastmod>
        <changefreq>weekly</changefreq>
        <priority>1.0</priority>
    </url>

    <!-- About Page -->
    <url>
        <loc>' . url('/about') . '</loc>
        <lastmod>' . $currentDate . '</lastmod>
        <changefreq>monthly</changefreq>
        <priority>0.9</priority>
    </url>

    <!-- Experience Page -->
    <url>
        <loc>' . url('/experience') . '</loc>
        <lastmod>' . $currentDate . '</lastmod>
        <changefreq>monthly</changefreq>
        <priority>0.9</priority>
    </url>

    <!-- Projects Page -->
    <url>
        <loc>' . url('/projects') . '</loc>
        <lastmod>' . $currentDate . '</lastmod>
        <changefreq>monthly</changefreq>
        <priority>0.9</priority>
    </url>

    <!-- Blog Index -->
    <url>
        <loc>' . url('/blog') . '</loc>
        <lastmod>' . $currentDate . '</lastmod>
        <changefreq>weekly</changefreq>
        <priority>0.8</priority>
    </url>

</urlset>';

        return response($sitemap, 200)
            ->header('Content-Type', 'text/xml');
    }
}
