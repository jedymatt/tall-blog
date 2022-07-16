<?php

namespace App\Http\Livewire;

use App\Models\Post;
use Livewire\Component;

class TogglePublishButton extends Component
{
    public Post $post;

    public function mount(Post $post)
    {
        $this->post = $post;
    }

    public function render()
    {
        return view('livewire.toggle-publish-button');
    }

    public function togglePublish()
    {
        $this->post->update([
            'published_at' => $this->post->isPublished() ? null : now(),
        ]);
    }
}
