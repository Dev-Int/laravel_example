<?php

use App\Http\Controllers\AppController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\PhotosController;
use Illuminate\Support\Facades\Route;

Route::get('/', [AppController::class, 'index'])->name('app_home');

Route::view('/about-us','pages/about')->name('app_about');

Route::get('blogs/{id}', [BlogController::class, 'show'])
    ->where('id', '[0-9+]')
    ->name('blog_show')
;

Route::get('blogs', [BlogController::class, 'create'])->name('blog_create');
Route::post('blogs', [BlogController::class, 'store'])->name('blog_store');

Route::get('photos', [PhotosController::class, 'create'])->name('photo_create');
Route::post('photos', [PhotosController::class, 'store'])->name('photo_store');
