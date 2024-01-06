<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

Route::middleware(['auth'])->group(function () {
    Route::controller(PostController::class)->group(function () {
        Route::resource('/post', PostController::class)->except('index', 'show')->middleware('user.permission');
        Route::get('/post', 'index')->name('post.index');
        Route::get('/post/{post}', 'show')->name('post.show');
        Route::get('/myposts', 'myPosts')->name('mypost');
    });;
});
