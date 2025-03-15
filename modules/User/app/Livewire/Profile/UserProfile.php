<?php

namespace Modules\User\App\Livewire\Profile;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Modules\User\App\Models\User;

class UserProfile extends Component
{
    public $first_name;
    public $last_name;
    public $email;
    public $username;

    // Load the current user's data
    public function mount()
    {
        $user = Auth::user();
        $this->first_name = $user->first_name;
        $this->last_name = $user->last_name;
        $this->email = $user->email;
        $this->username = $user->username;
    }

    // Validate and update the user's profile
    public function updateProfile()
    {
        // Validate the fields
        $validatedData = $this->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:users,email,' . Auth::id(),
            'username' => 'required|string|max:255|unique:users,username,' . Auth::id(),
        ]);

        // Update the user's profile
        $user = User::find(Auth::id());
        $user->update([
            'first_name' => $this->first_name,
            'last_name' => $this->last_name,
            'email' => $this->email,
            'username' => $this->username,
        ]);

        // Flash success message
        session()->flash('success', 'Profile updated successfully.');
    }

    public function render()
    {
        return view('user::livewire.profile.user-profile');
    }
}