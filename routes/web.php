<?php

// use App\Http\Controllers\Admin\AuthController;

use App\Http\Controllers\Admin\GalleryController as ControllersGalleryController;
use App\Http\Controllers\Admin\NewsController;
use App\Http\Controllers\FrontEnd\ContactController;
use App\Http\Controllers\FrontEnd\GalleryController;
use App\Http\Controllers\FrontEnd\HomeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//Route::get('/', function () {
  //  return view('welcome');
//});

Route::get('/',[HomeController::class,'index'])->name('home');
Route::get('/about',[HomeController::class,'about'])->name('about');
Route::get('/contact-us',[ContactController::class,'contact'])->name('contact-us');
Route::get('/history',[HomeController::class,'history'])->name('history');
Route::get('/gallery',[GalleryController::class,'index'])->name('gallery');
Route::post('/contact-us/store',[ContactController::class,'storeContact'])->name('contact-us.store');

Route::get('/news-events/{newsEvent}',[HomeController::class,'show'])->name('frontend.news_events.show');


Route::prefix("admin")->group(function () {

    Route::redirect('/','admin/login');
    Route::get('/login', [App\Http\Controllers\Admin\AuthController::class,'index'])->name('admin.login');
    Route::post('/login', [App\Http\Controllers\Admin\AuthController::class,'login'])->name('admin.login');
    Route::post('/logout', [App\Http\Controllers\Admin\AuthController::class,'logout'])->name('admin.logout');

    Route::middleware('auth')->group(function(){
        Route::get('/dashboard', [App\Http\Controllers\Admin\DashboardController::class,'index'])->name('admin.dashboard');
        Route::get('/dashboard/contacts', [App\Http\Controllers\Admin\DashboardController::class,'contacts'])->name('admin.contacts');
        Route::get('/dashboard/banners', [App\Http\Controllers\Admin\BannerController::class,'banners'])->name('admin.banners');
        Route::get('/dashboard/banners/add', [App\Http\Controllers\Admin\BannerController::class,'addBanner'])->name('admin.banners.add');
        Route::post('/dashboard/banners/store', [App\Http\Controllers\Admin\BannerController::class,'createBanner'])->name('admin.banners.store');
        Route::get('/dashboard/banners/edit/{id}', [App\Http\Controllers\Admin\BannerController::class,'editBanner'])->name('admin.banners.edit');
        Route::post('/dashboard/banners/update/{id}', [App\Http\Controllers\Admin\BannerController::class,'updateBanner'])->name('admin.banners.update');
        Route::get('/dashboard/banners/delete/{id}', [App\Http\Controllers\Admin\BannerController::class,'deleteBanner'])->name('admin.banners.delete');

        // Gallery Routes
        Route::get('/dashboard/gallery', [ControllersGalleryController::class,'index'])->name('admin.gallery');
        Route::get('/dashboard/gallery/add', [ControllersGalleryController::class,'addGallery'])->name('admin.gallery.add');
        Route::post('/dashboard/gallery/store', [ControllersGalleryController::class,'createGallery'])->name('admin.gallery.store');

        // News & Events Routes
        Route::get('/news-events', [NewsController::class, 'index'])->name('admin.news_events');
        Route::get('/news-events/add', [NewsController::class, 'create'])->name('admin.news_events.add');
        Route::post('/news-events/store', [NewsController::class, 'store'])->name('admin.news_events.store');
        Route::get('/news-events/{newsEvent}', [NewsController::class, 'show'])->name('admin.news_events.show');
    });

});
