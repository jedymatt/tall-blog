<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Post;

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
}
