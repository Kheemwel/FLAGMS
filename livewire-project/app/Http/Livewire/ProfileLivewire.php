<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\MyUsers;
use Illuminate\Support\Facades\Hash;

class ProfileLivewire extends Component
{
    public $currentPassword;
    public $newPassword;
    public $confirmPassword;
    public $errorMessage;

    public function render()
    {
        return view('livewire.livewire_login.profile-livewire');
    }

    public function changePassword()
    {
        $userId = session('user_id');

        $user = MyUsers::find($userId);

        if (!password_verify($this->currentPassword, $user->hashed_password)) {
            $this->errorMessage = 'Current password is incorrect.';
            return;
        }

        if ($this->newPassword !== $this->confirmPassword) {
            $this->errorMessage = 'New password and confirm password do not match.';
            return;
        }

        $user->password = $this->confirmPassword;
        $user->hashed_password = Hash::make($this->newPassword);
        $user->save();

        $this->currentPassword = '';
        $this->newPassword = '';
        $this->confirmPassword = '';
        $this->errorMessage = 'Password changed successfully.';
    }
}
