<?php

namespace App\Http\Livewire\User\Profile;

use Illuminate\Validation\Rule;
use Livewire\Component;

class UpdatePersonalInformation extends Component
{
    public $user;

    public function mount()
    {
        $this->user = auth()->user()->toArray();
    }

    public function render()
    {
        return view('livewire.user.profile.update-personal-information');
    }

    public function update()
    {
        $this->validate(
            [
                'user.name' => ['required', 'string'],
                'user.email' => ['required', 'email', Rule::unique('users', 'email')->ignore($this->user['id'])],
            ],
            attributes: [
                'user.name' => 'name',
                'user.email' => 'email',
            ]
        );

        auth()->user()->update([
            'name' => $this->user['name'],
            'email' => $this->user['email'],
        ]);

        session()->flash('success', 'Updated!');
    }
}
