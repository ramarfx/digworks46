<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

Route::middleware(['auth'])->group(function () {
    Route::controller(PostController::class)->group(function () {
        Route::resource('/post', PostController::class)->except('index', 'show', 'create')->middleware('user.permission');
        Route::resource('/post', PostController::class)->only('index', 'show', 'create');
        Route::get('/myposts', 'myPosts')->name('mypost');
    });;
});
