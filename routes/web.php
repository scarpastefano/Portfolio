<?php

use App\Http\Controllers\Auth\GoogleSocialiteController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\TecnologieController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PageController::class, 'homepage'])->name('homepage');
Route::get('/aboutme', [PageController::class, 'aboutme'])->name('aboutme');
Route::get('/contacts', [PageController::class, 'contacts'])->name('contacts');
Route::get('/dashboard', [PageController::class, 'dashboard'])->name('dashboard');
Route::get('/project', [PageController::class, 'project'])->name('project');
Route::post('/send', [PageController::class, 'send'])->name('send');

Route::resource('post', PostController::class)->middleware('auth')->except(['post.show']);
Route::get('post/{post}', [PostController::class, 'show'])->name('post.show');

Route::resource('tecnologie', TecnologieController::class);

Route::get('auth/google', [GoogleSocialiteController::class, 'redirectToGoogle']);  // redirect to google login
Route::get('callback/google', [GoogleSocialiteController::class, 'handleCallback']);    // callback route after google account chosen


