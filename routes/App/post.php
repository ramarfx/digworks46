<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

Route::middleware(['auth'])->group(function () {
    Route::resource('/post', PostController::class);
    Route::get('/myposts', [PostController::class, 'myPosts'])->name('mypost');
});
