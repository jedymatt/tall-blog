<?php

use App\Http\Controllers\User;
use App\Models\Post;
use App\Services\PostService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware('auth')->group(function () {
    Route::get('/my-posts', [User\PostController::class, 'index'])
        ->name('my-posts');

    Route::get('/write-post', [User\PostController::class, 'create'])
        ->name('write-post');

    Route::post('/write-post', [User\PostController::class, 'store']);

    Route::get('/my-posts/{post:slug}/edit', function (Post $post) {
        return view('user-post.edit', compact('post'));
    })->name('my-posts.edit');

    Route::put('/my-posts/{post:slug}/edit', function (Request $request, Post $post) {
        $request->validate([
            'title' => 'required|string',
            'body' => 'required|string',
        ]);

        $post->update([
            'title' => $request->title,
            'body' => $request->body,
        ]);

        $slug = PostService::generateSlug($post->id, $post->title);

        return redirect()->route('my-posts.edit', $post);
    });

    Route::get('/user/profile', function () {
        $user = auth()->user();

        return view('user.profile', compact('user'));
    })->name('user.profile');
});
