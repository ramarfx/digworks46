<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\PostController;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'] )->name('dashboard');
    Route::get('/dashboard/posts', [PostController::class, 'posts'] )->name('admin.posts');
    Route::get('/dashboard/users', [PostController::class, 'users'] )->name('admin.users');
});

