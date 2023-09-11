<?php

namespace App\Livewire;

use App\Models\ProfilePictures;
use Livewire\Component;

class ProfilePicturesLivewire extends Component
{
    public $profiles;
    public function render()
    {
        $this->profiles = ProfilePictures::all();
        return view('livewire.file_management.profile_pictures.profile-pictures-livewire');
    }
    
    public function getProfile($id)
    {
        $profile = ProfilePictures::find($id);
        return $profile ? imageBinaryToSRC($profile->profile_picture) : null;
    }
}
