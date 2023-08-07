<?php

use App\Http\Controllers\Backend\BlogCategoryController;
use App\Http\Controllers\Backend\BlogController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', function () {
    return view('backend.login');
});

Route::get('asd',function(){
    return view('backend.master'); 
});

Route::get('dsa',function(){
    return view('backend.index');
});


Route::controller(BlogCategoryController::class)->prefix('blogCategory')->group(function(){
    Route::get('list','index');
});

Route::controller(BlogController::class)->prefix('blog')->group(function(){
    Route::get('list','index');
});
