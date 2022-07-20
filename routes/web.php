<?php

use App\Http\Controllers\HomeController;
use App\Models\Post;
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

Route::get('/', [HomeController::class, 'show'])
    ->name('home');

Route::get('/posts/{post:slug}', function (Post $post) {
    return view('post.show', compact('post'));
})->name('post.show');

require __DIR__.'/auth.php';
require __DIR__.'/user.php';
