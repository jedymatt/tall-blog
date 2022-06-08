<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Services\PostService;

class PublishedPostController extends Controller
{
    public function store(Post $post, PostService $postService)
    {
        $postService->publish($post);

        return redirect()->route('user-posts.index');
    }

    public function destroy(Post $post, PostService $postService)
    {
        $postService->unpublish($post);

        return redirect()->route('user-posts.index');
    }
}
