<?php
use App\Http\Controllers\User\PostController;
use App\Http\Controllers\User\WrittenPostController;

Route::prefix('home')->name('home.')->middleware('auth')->group(function () {
    Route::get('/my-posts', [PostController::class , 'index'])
        ->name('my-posts');

    Route::get('/write-post', [WrittenPostController::class , 'create'])
        ->name('write-post');

    Route::post('/write-post', [WrittenPostController::class , 'store']);
});
