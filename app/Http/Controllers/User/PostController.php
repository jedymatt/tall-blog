<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Services\PostService;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::where('user_id', auth()->user()->id)
            ->latest()
            ->paginate();

        return view('user.posts.index', compact('posts'));
    }

    public function create()
    {
        return view('user.posts.create');
    }

    public function store(Request $request, PostService $postService)
    {
        $request->validate([
            'title' => 'required|string',
            'body' => 'required|string',
        ]);

        $post = $postService->createDraft($request->title, $request->body);

        return redirect()->route('user.posts.edit', $post);
    }

    public function edit(Post $post)
    {
        return view('user.posts.edit', compact('post'));
    }

    public function update(Request $request, Post $post)
    {
        $request->validate([
            'title' => 'required|string',
            'body' => 'required|string',
        ]);

        $post->update([
            'title' => $request->title,
            'body' => $request->body,
        ]);

        return redirect()->route('user.posts.edit', $post);
    }

    public function destroy(Post $post)
    {
        $post->delete();

        return redirect()->route('user.posts.index');
    }
}
