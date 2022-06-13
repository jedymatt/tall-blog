<?php

namespace App\Services;

use App\Models\Post;

class PostService
{
    public function create(array $data)
    {
        $post = Post::create([
            'title' => $data['title'],
            'body' => $data['body'],
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

    public function update(Post $post, array $data)
    {
        $post->update([
            'title' => $data['title'],
            'body' => $data['body'],
        ]);

        return $post;
    }

    public function updateSlug(Post $post)
    {
        $post->update([
            'slug' => $this->generateSlug($post->id, $post->title),
        ]);
    }

    public function delete(Post $post)
    {
        $post->delete();
    }

    public function isAuthor(Post $post)
    {
        return $post->user_id === auth()->id();
    }

    public function publish(Post $post)
    {
        $post->update([
            'published_at' => now(),
        ]);
    }

    public function unpublish(Post $post)
    {
        $post->update([
            'published_at' => null,
        ]);
    }
}
