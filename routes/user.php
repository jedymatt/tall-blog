<?php

use Illuminate\Support\Facades\Route;
use App\Models\Post;
use App\Services\PostService;
use Illuminate\Http\Request;

Route::middleware('auth')->group(function () {
    Route::get('/my-posts', function () {
        $posts = Post::where('user_id', auth()->user()->id)
            ->latest()
            ->paginate();

        return view('user-post.index', compact('posts'));
    })->name('my-posts');

    Route::get('/write-post', function () {
        return view('user-post.create');
    })->name('write-post');

    Route::post('/write-post', function (Request $request) {
        $request->validate([
            'title' => 'required|string',
            'body' => 'required|string',
        ]);

        $post = Post::create([
            'user_id' => auth()->user()->id,
            'title' => $request->title,
            'body' => $request->body,
        ]);

        $slug = PostService::generateSlug($post->id, $post->title);

        $post->update([
            'slug' => $slug,
        ]);

        return redirect()->route('my-posts.edit', $post);
    });

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
