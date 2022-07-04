<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class PreviewPostController extends Controller
{
    public function show(Post $post)
    {
        return view('my-post.preview', compact('post'));
    }
}
