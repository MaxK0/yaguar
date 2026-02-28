<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\SignupController;

// Главная страница
Route::get('/', [HomeController::class, 'index'])->name('home');

// О клубе
Route::get('/about', [AboutController::class, 'index'])->name('about');

// Галерея
Route::get('/gallery', [GalleryController::class, 'index'])->name('gallery');

// Запись на тренировку
Route::get('/signup', [SignupController::class, 'index'])->name('signup');
Route::post('/signup', [SignupController::class, 'store'])->name('signup.store');
