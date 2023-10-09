<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AdminController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/dashboard', [App\Http\Controllers\AdminController::class, 'dashboard'])->name('dashboard');
Route::get('/events', [App\Http\Controllers\AdminController::class, 'events'])->name('events');
Route::get('/flash_news', [App\Http\Controllers\AdminController::class, 'flash_news'])->name('flash_news');
Route::get('/photo_gallery', [App\Http\Controllers\AdminController::class, 'photo_gallery'])->name('photo_gallery');
Route::get('/video_gallery', [App\Http\Controllers\AdminController::class, 'video_gallery'])->name('video_gallery');
Route::get('/gallery_images/{id}', [App\Http\Controllers\AdminController::class, 'gallery_images'])->name('gallery_images');
