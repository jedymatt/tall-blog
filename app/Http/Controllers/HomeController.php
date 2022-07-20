<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request;
use App\Models\Post;

class HomeController extends Controller
{
    public function show()
    {
        $posts = Post::published()->paginate();

        return view('home', compact('posts'));
    }
}
