<?php

use App\Http\Controllers\User;
use Illuminate\Support\Facades\Route;

Route::middleware('auth')->group(function () {
    Route::get('/user/profile', function () {
        $user = auth()->user();

        return view('user.profile', compact('user'));
    })->name('user.profile');

    Route::get('/my-posts', [User\PostController::class, 'index'])
        ->name('user.posts.index');

    Route::get('/write-post', [User\PostController::class, 'create'])
        ->name('user.posts.create');

    Route::post('/write-post', [User\PostController::class, 'store']);

    Route::get('/my-posts/{post:slug}/edit', [User\PostController::class, 'edit'])
        ->name('user.posts.edit');

    Route::put('/my-posts/{post:slug}/edit', [User\PostController::class, 'update'])
        ->name('user.posts.update');
});
