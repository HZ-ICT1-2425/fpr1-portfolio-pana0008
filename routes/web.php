<?php

use App\Http\Controllers\StaticContentController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\FaqController;
use Illuminate\Support\Facades\Route;

Route::get('/', [StaticContentController::class, 'home'])->name('home');
Route::get('/profile', [StaticContentController::class, 'profile'])->name('profile');
Route::get('/dashboard', [StaticContentController::class, 'dashboard'])->name('dashboard');
Route::get('/faq', [FaqController::class, 'index'])->name('faqs.index');
Route::get('/posts', [PostController::class, 'index'])->name('posts.index');
Route::get('posts/create', [PostController::class, 'create'])->name('posts.create');

//to be implemented
Route::post('posts', [PostController::class, 'store'])->name('posts.store');
Route::get('posts/{post}', [PostController::class, 'show'])->name('posts.show');
Route::get('posts/{post}/edit', [PostController::class, 'edit'])->name('posts.edit');
Route::put('posts/{post}', [PostController::class, 'update'])->name('posts.update');
Route::delete('/posts/{post}', [PostController::class, 'destroy'])->name('posts.destroy');
