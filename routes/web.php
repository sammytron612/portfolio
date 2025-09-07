<?php

use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;


Route::get('/', function () {
    return view('about');
})->name('home');

Route::get('/portfolio', function () {
    return view('portfolio');
})->name('portfolio');

Route::post('/upload-image', [\App\Http\Controllers\ImageUploadController::class, 'store'])->name('image.upload');
Route::get('/blog', [\App\Http\Controllers\BlogController::class, 'index'])->name('blog.index');
Route::get('/blog/create', [\App\Http\Controllers\BlogController::class, 'createBlog'])->name('blog.create');
Route::post('/blog/create', [\App\Http\Controllers\BlogController::class, 'saveBlog'])->name('blog.save');
Route::view('/about', 'about')->name('about');
Route::view('/experience', 'experience')->name('experience');

Route::view('/projects', 'projects')->name('projects');
Route::get('/snippet/create', [\App\Http\Controllers\CodeSnippetController::class, 'create'])->name('snippet.create');
Route::post('/snippet/create', [\App\Http\Controllers\CodeSnippetController::class, 'save'])->name('snippet.save');

// Sitemap route
Route::get('/sitemap.xml', [\App\Http\Controllers\SitemapController::class, 'index'])->name('sitemap');

// Robots.txt route
Route::get('/robots.txt', function () {
    $content = "User-agent: *
Allow: /

# Sitemap
Sitemap: " . url('/sitemap.xml') . "

# Allow important pages
Allow: /
Allow: /about
Allow: /experience
Allow: /projects
Allow: /blog

# Disallow admin areas
Disallow: /dashboard
Disallow: /settings
Disallow: /login
Disallow: /register
Disallow: /admin";

    return response($content, 200)
        ->header('Content-Type', 'text/plain');
})->name('robots');


Route::middleware(['auth'])->group(function () {
    Route::redirect('settings', 'settings/profile');

    Volt::route('settings/profile', 'settings.profile')->name('settings.profile');
    Volt::route('settings/password', 'settings.password')->name('settings.password');
    Volt::route('settings/appearance', 'settings.appearance')->name('settings.appearance');
});

require __DIR__.'/auth.php';
