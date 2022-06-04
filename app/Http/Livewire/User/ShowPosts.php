<?php

namespace App\Http\Livewire\User;

use Livewire\Component;
use Livewire\WithPagination;

class ShowPosts extends Component
{
    use WithPagination;

    public function render()
    {
        $posts = auth()->user()->posts()->latest()->paginate(5);

        return view('livewire.user.show-posts', compact('posts'));
    }
}
