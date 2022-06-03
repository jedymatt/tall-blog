<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return redirect()->route('posts.index');
});

Route::get('/home', [HomeController::class, 'show'])
    ->middleware('auth')
    ->name('home');


Route::get('/posts', [PostController::class, 'index'])
    ->name('posts.index');

Route::get('/posts/create', [PostController::class, 'create'])
    //    ->middleware('auth')
    ->name('posts.create');

Route::post('/posts', [PostController::class, 'store'])
    // ->middleware('auth')
    ->name('posts.store');

Route::get('/posts/{post:slug}', [PostController::class, 'show'])
    ->name('posts.show');


require __DIR__ . '/auth.php';
