<?php

namespace App\Http\Livewire\User\Profile;

use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class UpdatePassword extends Component
{
    public $current_password;

    public $password;

    public $password_confirmation;

    public function render()
    {
        return view('livewire.user.profile.update-password');
    }

    public function update()
    {
        $this->validate([
            'current_password' => 'required',
            'password' => 'required|confirmed',
        ]);

        if (! Hash::check($this->current_password, auth()->user()->password)) {
            $this->emit('passwordError');

            return;
        }

        auth()->user()->update([
            'password' => Hash::make($this->password),
        ]);

        session()->flash('message', 'Password updated successfully!');

        $this->resetInput();
    }

    public function resetInput()
    {
        $this->current_password = null;
        $this->password = null;
        $this->password_confirmation = null;
    }
}
