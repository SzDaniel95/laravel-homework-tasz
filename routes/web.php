<?php

use App\Http\Controllers\AdminPostController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\PostCommentsController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionsController;
use App\Http\Controllers\UsersController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PostController::class, 'index'])->name('home');

Route::get('posts/{post:slug}', [PostController::class, 'show']);
Route::post('posts/{post:slug}/comments', [PostCommentsController::class, 'store']);

Route::post('contact', [ContactController::class, 'store']);
Route::get('contact', [ContactController::class, 'create']);


Route::get('register', [RegisterController::class, 'create'])->middleware('guest');
Route::post('register', [RegisterController::class, 'store'])->middleware('guest');

Route::get('login', [SessionsController::class, 'create'])->middleware('guest');
Route::post('login', [SessionsController::class, 'store'])->middleware('guest');

Route::post('logout', [SessionsController::class, 'destroy'])->middleware('auth');

Route::get('/run-migrations', function () {
    return Artisan::call('migrate:fresh', ["--seed" => true, "--force" => true]);
    });

// Admin Section
Route::middleware('can:admin')->group(function () {
    Route::resource('admin/posts', AdminPostController::class)->except('show');
    Route::resource('admin/contact', ContactController::class);
    Route::resource('admin/users', UsersController::class);
});

