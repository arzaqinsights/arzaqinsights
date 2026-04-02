<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, 'index'])->name('home');

// Core Pages
Route::view('/about', 'website.about.index')->name('about');
Route::view('/portfolio', 'website.portfolio.index')->name('portfolio');
Route::view('/contact', 'website.contact.index')->name('contact');

// Service Pages
Route::prefix('services')->name('services.')->group(function () {
    Route::view('/web-development', 'website.services.web-development.index')->name('web-development');
    Route::view('/app-development', 'website.services.app-development.index')->name('app-development');
    Route::view('/social-media-marketing', 'website.services.social-media-marketing.index')->name('social-media-marketing');
    Route::view('/social-media-management', 'website.services.social-media-management.index')->name('social-media-management');
    Route::view('/seo-sem', 'website.services.seo-sem.index')->name('seo-sem');
    Route::view('/ai-automation', 'website.services.ai-automation.index')->name('ai-automation');
});

// Blog Pages
Route::view('/blogs', 'website.blogs.index')->name('blogs.index');
Route::view('/blogs/single-post', 'website.blogs.show')->name('blogs.show');
