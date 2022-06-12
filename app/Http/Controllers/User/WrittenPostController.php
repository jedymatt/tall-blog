<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\User\WritePostRequest;
use App\Models\Post;
use App\Services\PostService;

class WrittenPostController extends Controller
{

    public function index()
    {
        $posts = auth()->user()->posts;

        return view('user.my-posts', compact('posts'));
    }

    public function show(Post $post)
    {
        return view('user.post', compact('post'));
    }


    public function create()
    {
        return view('user.write-post');
    }

    public function store(WritePostRequest $request, PostService $postService)
    {
        $postService->create($request->validated());

        return redirect()->route('home');
    }
}
