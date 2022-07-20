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

        return view('user-post.index', compact('posts'));
    }

    public function create()
    {
        return view('user-post.create');
    }

    public function store(Request $request, PostService $postService)
    {
        $request->validate([
            'title' => 'required|string',
            'body' => 'required|string',
        ]);

        $post = $postService->createDraft($request->title, $request->body);

        return redirect()->route('my-posts.edit', $post);
    }
}
