<?php

use App\Http\Controllers\AppController;
use App\Http\Controllers\BlogController;
use Illuminate\Support\Facades\Route;

Route::get('/', [AppController::class, 'index'])->name('app_home');

Route::view('/about-us','pages/about')->name('app_about');

Route::get('blog/{id}', [BlogController::class, 'show'])
    ->where('id', '[0-9+]')
    ->name('blog_show')
;
