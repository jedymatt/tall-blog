<?php

use App\Http\Controllers\User\WrittenPostController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\HomeController;

Route::middleware('auth')->group(function () {

    Route::get('/my-posts', [WrittenPostController::class, 'index'])
        ->name('my-posts');

    Route::get('/write-post', [WrittenPostController::class, 'create'])
        ->name('write-post');

    Route::post('/write-post', [WrittenPostController::class, 'store']);

    Route::get('/user/profile', function () {
        $user = auth()->user();

        return view('user.profile', compact('user'));
    })->name('user.profile');
});
