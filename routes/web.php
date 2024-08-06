<?php

use App\Http\Controllers\PageController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PageController::class, 'homepage'])->name('homepage');
Route::get('/aboutme', [PageController::class, 'aboutme'])->name('aboutme');
Route::get('/contacts', [PageController::class, 'contacts'])->name('contacts');

Route::resource('post', PostController::class);
Route::get('/dashboard', [PageController::class, 'dashboard'])->name('dashboard');
