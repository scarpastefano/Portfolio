<?php

use App\Http\Controllers\PageController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\TecnologiesController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PageController::class, 'homepage'])->name('homepage');
Route::get('/aboutme', [PageController::class, 'aboutme'])->name('aboutme');
Route::get('/contacts', [PageController::class, 'contacts'])->name('contacts');

Route::resource('post', PostController::class)->middleware('auth')->except(['post.show']);
Route::get('posts/{post}', [PostController::class, 'show'])->name('post.show');
// Route::get('/post', [PostController::class, 'index'])->name('post.index')->middleware();
Route::resource('tecnologie', TecnologiesController::class);

Route::get('/dashboard', [PageController::class, 'dashboard'])->name('dashboard');
