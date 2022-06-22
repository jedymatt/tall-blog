<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function show()
    {
        $posts = Post::published()->paginate();

        return view('home', compact('posts'));
    }
}
