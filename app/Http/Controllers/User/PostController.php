<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\User\WritePostRequest;
use App\Models\Post;
use App\Services\PostService;

class PostController extends Controller
{

    public function index()
    {
        $posts = Post::with('user')->orderBy('created_at', 'desc')->paginate(10);

        return view('user.my-posts', compact('posts'));
    }
}
