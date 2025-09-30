<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use Spatie\Sitemap\SitemapGenerator;

// Home / portfolio grid
Route::view('/', 'home')->name('home');

// About page
Route::view('/about', 'pages.about')->name('about');

// Photography gallery
Route::view('/photos', 'pages.photos')->name('photos');

// Contact form
Route::get('/contact', [ContactController::class, 'create'])->name('contact.create');
Route::post('/contact', [ContactController::class, 'store'])
    ->name('contact.store')
    ->middleware('throttle:5,1');

/*
|--------------------------------------------------------------------------
| Individual project pages
| These slugs match the links used in the portfolio grid
|--------------------------------------------------------------------------
*/
Route::view('/stitch', 'projects.stitch')->name('projects.stitch');
Route::view('/wholesomeHarvest', 'projects.wholesomeHarvest')->name('projects.wholesomeHarvest');
Route::view('/w7', 'projects.w7')->name('projects.w7');
Route::view('/marble', 'projects.marble')->name('projects.marble');
Route::view('/label', 'projects.label')->name('projects.label');
Route::view('/stump-cross-caverns', 'projects.stump-cross-caverns')->name('projects.stump-cross-caverns');
Route::view('/doors', 'projects.doors')->name('projects.doors');

/*
|--------------------------------------------------------------------------
| Individual photography collection pages
|--------------------------------------------------------------------------
*/
Route::view('/wildlife', 'photos.wildlife')->name('photos.wildlife');
Route::view('/pets',     'photos.pets')->name('photos.pets');
Route::view('/motion',   'photos.motion')->name('photos.motion');

Route::get('sitemap.xml', function () {
    return SitemapGenerator::create(config('app.url'))
        ->getSitemap()
        ->toResponse(request());
});