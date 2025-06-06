<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\ImageIntervenstionController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/blog', [BlogController::class, 'index'])->name('blog');
Route::get('/image', [ImageIntervenstionController::class, 'generate'])->name('image.generate');
