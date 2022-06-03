<?php

namespace App\Services;

use App\Models\Post;

class PostService
{
    public function create(array $data)
    {
        $post =  Post::create([
            'title' => $data['title'],
            'content' => $data['content'],
            'user_id' => auth()->id(),
        ]);

        $post->slug = $this->generateSlug($post->id, $post->title);
        $post->save();

        return $post;
    }

    public function generateSlug($id, $title)
    {
        $slug = str($title)->slug();

        $post = Post::where('slug', $slug)->first();

        if ($post) {
            $slug = $slug . '-' . $id;
        }

        return $slug;
    }
}
