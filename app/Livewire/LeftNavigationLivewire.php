<?php

namespace App\Livewire;

use App\Models\UserAccounts;
use Livewire\Component;

class LeftNavigationLivewire extends Component
{
    public $role;

    public function mount()
    {
        $userId = session('user_id');
        if ($userId) {
            $user = UserAccounts::find($userId);
            $this->role = $user->getRole->role;
        }
    }
    public function logout()
    {
        session()->forget('user_id');
        return redirect()->route('home-page');
    }

    public function render()
    {
        return view('livewire.dashboard.left-navigation-livewire');
    }
}
