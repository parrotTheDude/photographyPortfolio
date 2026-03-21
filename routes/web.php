<?php

use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use Spatie\Sitemap\Sitemap;
use Spatie\Sitemap\Tags\Url;

// Dynamic robots.txt — pulls sitemap URL from APP_URL
Route::get('robots.txt', function () {
    $sitemap = rtrim(config('app.url'), '/') . '/sitemap.xml';

    return response("User-agent: *\nAllow: /\n\nSitemap: {$sitemap}\n", 200, [
        'Content-Type' => 'text/plain',
    ]);
});

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
    $xml = Cache::remember('sitemap', 3600, function () {
        return Sitemap::create()
            // Core pages
            ->add(Url::create('/')
                ->setPriority(1.0)
                ->setChangeFrequency('weekly')
                ->setLastModificationDate(now()))
            ->add(Url::create('/about')
                ->setPriority(0.8)
                ->setChangeFrequency('monthly'))
            ->add(Url::create('/contact')
                ->setPriority(0.7)
                ->setChangeFrequency('yearly'))
            ->add(Url::create('/photos')
                ->setPriority(0.8)
                ->setChangeFrequency('monthly'))

            // Projects
            ->add(Url::create('/stitch')
                ->setPriority(0.7)
                ->setChangeFrequency('yearly'))
            ->add(Url::create('/wholesomeHarvest')
                ->setPriority(0.7)
                ->setChangeFrequency('yearly'))
            ->add(Url::create('/w7')
                ->setPriority(0.7)
                ->setChangeFrequency('yearly'))
            ->add(Url::create('/marble')
                ->setPriority(0.7)
                ->setChangeFrequency('yearly'))
            ->add(Url::create('/label')
                ->setPriority(0.7)
                ->setChangeFrequency('yearly'))
            ->add(Url::create('/stump-cross-caverns')
                ->setPriority(0.7)
                ->setChangeFrequency('yearly'))
            ->add(Url::create('/doors')
                ->setPriority(0.7)
                ->setChangeFrequency('yearly'))

            // Photography collections
            ->add(Url::create('/wildlife')
                ->setPriority(0.6)
                ->setChangeFrequency('monthly'))
            ->add(Url::create('/pets')
                ->setPriority(0.6)
                ->setChangeFrequency('monthly'))
            ->add(Url::create('/motion')
                ->setPriority(0.6)
                ->setChangeFrequency('monthly'))

            ->render();
    });

    return response($xml, 200, ['Content-Type' => 'application/xml']);
});