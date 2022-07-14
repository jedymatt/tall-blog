<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\PreviewPostController;
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

    Route::get('/my-posts/{post:slug}/preview', [PreviewPostController::class, 'show'])
        ->name('my-posts.preview');

    Route::get('/write-post', function () {
        return view('user-post.create');
    })->name('write-post');

    Route::post('/write-post', function (Request $request) {
        $request->merge([
            'publish_post' => $request->boolean('publish_post'),
        ]);

        $request->validate([
            'title' => 'required|string',
            'body' => 'required|string',
            'publish_post' => 'nullable|boolean',
        ]);

        $post = Post::create([
            'user_id' => auth()->user()->id,
            'title' => $request->title,
            'body' => $request->body,
            'published_at' => $request->publish_post ? now() : null,
        ]);

        $slug = PostService::generateSlug($post->id, $post->title);

        $post->update([
            'slug' => $slug,
        ]);

        return redirect()->route('my-posts');
    });

    Route::get('/user/profile', function () {
        $user = auth()->user();

        return view('user.profile', compact('user'));
    })->name('user.profile');
});
