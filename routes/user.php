<?php

use App\Http\Controllers\User\WrittenPostController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\HomeController;

Route::prefix('home')->middleware('auth')->group(function () {
    Route::get('/', [HomeController::class, 'show'])
        ->middleware('auth')
        ->name('home');

    Route::get('/my-posts', [WrittenPostController::class, 'index'])
        ->name('my-posts');

    Route::get('/write-post', [WrittenPostController::class, 'create'])
        ->name('write-post');

    Route::post('/write-post', [WrittenPostController::class, 'store']);
});
