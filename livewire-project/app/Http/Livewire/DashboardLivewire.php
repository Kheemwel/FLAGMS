<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\MyUsers; // Assuming your user model is named MyUsers

class DashboardLivewire extends Component
{
    public $username;

    public function mount()
    {
        $userId = session('user_id');
        if ($userId) {
            $user = MyUsers::find($userId);
            $this->username = $user->username;
        }
    }

    public function logout()
    {
        session()->forget('user_id');
        return redirect()->route('login_livewire');
    }

    public function render()
    {
        return view('livewire.livewire_login.dashboard-livewire');
    }
}
