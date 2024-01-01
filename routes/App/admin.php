<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\PostController;
use Illuminate\Support\Facades\Route;

Route::get('/dashboard', [DashboardController::class, 'index'] )->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/dashboard/posts', [PostController::class, 'index'] )->middleware(['auth', 'verified'])->name('admin.posts');
