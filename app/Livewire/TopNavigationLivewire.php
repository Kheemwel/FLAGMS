<?php

namespace App\Livewire;

use App\Models\ProfilePictures;
use App\Models\UserAccounts;
use Livewire\Component;

class TopNavigationLivewire extends Component
{
    public $user_id, $role, $first_name, $profile_picture_id;
    protected $listeners = ['profileUpdated'];

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
        return view('livewire.dashboard.top-navigation-livewire');
    } 

    public function profileUpdated($profile_id)
    {
        $this->profile_picture_id = $profile_id;
    }

    public function viewProfile()
    {
        $profile = ProfilePictures::find($this->profile_picture_id);
        if ($profile) {
            return imageBinaryToSRC($profile->profile_picture);
        } else {
            return defaultProfilePicture();
        }
    }
}
