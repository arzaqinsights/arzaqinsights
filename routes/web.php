<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, 'index'])->name('home');

// Core Pages
Route::view('/about', 'website.about')->name('about');
Route::view('/portfolio', 'website.portfolio')->name('portfolio');
Route::view('/contact', 'website.contact')->name('contact');

// Service Pages
Route::prefix('services')->name('services.')->group(function () {
    Route::view('/web-development', 'website.services.web-development')->name('web-development');
    Route::view('/app-development', 'website.services.app-development')->name('app-development');
    Route::view('/social-media-marketing', 'website.services.social-media-marketing')->name('social-media-marketing');
    Route::view('/social-media-management', 'website.services.social-media-management')->name('social-media-management');
    Route::view('/seo-sem', 'website.services.seo-sem')->name('seo-sem');
    Route::view('/ai-automation', 'website.services.ai-automation')->name('ai-automation');
});
