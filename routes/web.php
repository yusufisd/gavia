<?php

use App\Http\Controllers\Backend\ActivityCategoryController;
use App\Http\Controllers\Backend\ActivityController;
use App\Http\Controllers\Backend\AuthController;
use App\Http\Controllers\Backend\BlogCategoryController;
use App\Http\Controllers\Backend\BlogController;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\GalleryCategoryController;
use App\Http\Controllers\Backend\GalleryController;
use App\Http\Controllers\Backend\PageController;
use App\Http\Controllers\Backend\PersonelController;
use App\Http\Controllers\Backend\PopupController;
use App\Http\Controllers\Backend\ReferenceController;
use App\Http\Controllers\Backend\SliderController;
use App\Http\Controllers\Backend\SubAdminController;
use App\Http\Controllers\Backend\VideoGalleryCategoryController;
use App\Http\Controllers\Backend\VideoGalleryController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('login',[AuthController::class,'login'])->name('admin.login');
Route::post('login',[AuthController::class,'login_post'])->name('admin.login.post');

Route::prefix('admin')->name('admin.')->middleware('auth:admin')->group(function () {
    Route::get('logout',[AuthController::class,'logout'])->name('logout');
    Route::get('/',[DashboardController::class,'index'])->name('index');

    // BLOG KATEGORİ İŞLEMLERİ
    Route::controller(BlogCategoryController::class)->prefix('blog-kategori')->name('blogCategory.')->group(function () {
        Route::get('liste', 'index')->name('list');
        Route::get('ekle', 'create')->name('add');
        Route::post('ekle', 'store')->name('store');
        Route::get('duzenle/{id?}', 'edit')->name('edit');
        Route::post('guncelle/{id?}', 'update')->name('update');
    });

    // BLOG İŞLEMLERİ
    Route::controller(BlogController::class)->prefix('blog')->name('blog.')->group(function () {
        Route::get('liste', 'index')->name('list');
        Route::get('ekle', 'create')->name('add');
        Route::post('ekle', 'store')->name('store');
        Route::get('duzenle/{id?}', 'edit')->name('edit');
        Route::post('guncelle/{id?}', 'update')->name('update');

    });

    // AKTİVİTE KATEGORİ İŞLEMLERİ
    Route::controller(ActivityCategoryController::class)->prefix('activityCategory')->name('activityCategory.')->group(function () {
        Route::get('list', 'index')->name('list');
        Route::get('ekle', 'create')->name('add');
        Route::post('ekle', 'store')->name('store');
        Route::get('duzenle/{id?}', 'edit')->name('edit');
        Route::post('duzenle/{id?}', 'update')->name('update');
    });

    // AKTİVİTE İŞLEMLERİ
    Route::controller(ActivityController::class)->prefix('etkinlik')->name('activity.')->group(function () {
        Route::get('list', 'index')->name('list');
        Route::get('ekle', 'create')->name('add');
        Route::post('ekle', 'store')->name('store');
        Route::get('duzenle/{id?}', 'edit')->name('edit');
    });

    // SAYFA İŞLEMLERİ
    Route::controller(PageController::class)->prefix('page')->name('page.')->group(function () {
        Route::get('list', 'index')->name('list');
        Route::get('add', 'create')->name('add');
    });

     // SLİDER İŞLEMLERİ
     Route::controller(SliderController::class)->prefix('slider')->name('slider.')->group(function () {
        Route::get('list', 'index')->name('list');
        Route::get('add', 'create')->name('add');
    });

     // REFERANS İŞLEMLERİ
     Route::controller(ReferenceController::class)->prefix('reference')->name('reference.')->group(function () {
        Route::get('list', 'index')->name('list');
        Route::get('add', 'create')->name('add');
    });

     // PERSONEL İŞLEMLERİ
     Route::controller(PersonelController::class)->prefix('personel')->name('personel.')->group(function () {
        Route::get('list', 'index')->name('list');
        Route::get('add', 'create')->name('add');
    });

      // GALERİ KATEGORİ İŞLEMLERİ
      Route::controller(GalleryCategoryController::class)->prefix('galleryCategory')->name('galleryCategory.')->group(function () {
        Route::get('list', 'index')->name('list');
        Route::get('add', 'create')->name('add');
    });

     // GALERİ İŞLEMLERİ
     Route::controller(GalleryController::class)->prefix('gallery')->name('gallery.')->group(function () {
        Route::get('list', 'index')->name('list');
        Route::get('add', 'create')->name('add');
    });

    // VİDEO GALERİ KATEGORİ İŞLEMLERİ
    Route::controller(VideoGalleryCategoryController::class)->prefix('videoGalleryCategory')->name('videoGalleryCategory.')->group(function () {
        Route::get('list', 'index')->name('list');
        Route::get('add', 'create')->name('add');
    });

    // VİDEO GALERİ İŞLEMLERİ
    Route::controller(VideoGalleryController::class)->prefix('videoGallery')->name('videoGallery.')->group(function () {
        Route::get('list', 'index')->name('list');
        Route::get('add', 'create')->name('add');
    });


    // POPUP İŞLEMLERİ
    Route::controller(PopupController::class)->prefix('popup')->name('popup.')->group(function () {
        Route::get('list', 'index')->name('list');
        Route::get('add', 'create')->name('add');
    });

    // ALT ADMİN İŞLEMLERİ
    Route::controller(SubAdminController::class)->prefix('subAdmin')->name('subAdmin.')->group(function () {
        Route::get('list', 'index')->name('list');
        Route::get('add', 'create')->name('add');
        Route::post('store', 'store')->name('store');
    });
});
