<?php

namespace App\Livewire;

use App\Models\ProfilePictures;
use App\Models\UserAccounts;
use Livewire\Component;

class UserDashboardLivewire extends Component
{
    public $user_id, $role, $first_name, $profile_picture_id;

    public function mount()
    {
        $this->user_id = session('user_id');
        if ($this->user_id) {
            $user = UserAccounts::find($this->user_id);
            $this->role = $user->getRole->role;
            $this->first_name = $user->first_name;
            $this->profile_picture_id = $user->profile_picture_id;
        }
    }
    
    public function render()
    {
        return view('livewire.dashboard.user-dashboard-livewire');
    }

    public function viewProfile()
    {
        $profile = ProfilePictures::find($this->profile_picture_id);
        if ($profile) {
            return 'data:image/jpeg;base64,' . base64_encode($profile->profile_picture);
        }
    }
}
