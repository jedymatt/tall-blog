<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class UserPostController extends Controller
{

    public function index()
    {
        return view('user-posts.index');
    }

    public function create() {
        Post::factory(10)->create([
            'user_id' => auth()->id(),
        ]);
    }
}
