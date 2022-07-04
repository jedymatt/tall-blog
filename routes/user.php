<?php

use App\Http\Controllers\User\WrittenPostController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\HomeController;
use App\Http\Controllers\User\PreviewPostController;

Route::middleware('auth')->group(function () {

    Route::get('/my-posts', [WrittenPostController::class, 'index'])
        ->name('my-posts');

    Route::get('/my-posts/{post:slug}/preview', [PreviewPostController::class, 'show'])
        ->name('my-posts.preview');

    Route::get('/write-post', [WrittenPostController::class, 'create'])
        ->name('write-post');

    Route::post('/write-post', [WrittenPostController::class, 'store']);

    Route::get('/user/profile', function () {
        $user = auth()->user();

        return view('user.profile', compact('user'));
    })->name('user.profile');
});
