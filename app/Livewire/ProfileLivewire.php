<?php

namespace App\Livewire;

use App\Models\ProfilePictures;
use App\Models\Roles;
use App\Models\UserAccounts;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;
use Livewire\WithFileUploads;

class ProfileLivewire extends Component
{
    use WithFileUploads;
    public $user_id, $username, $role, $first_name, $last_name, $name, $password;
    public  $profile_picture_id, $profile_picture;

    public function mount()
    {
        $this->user_id = session('user_id');
        if ($this->user_id) {
            $user = UserAccounts::find($this->user_id);
            $this->username = $user->username;
            $this->role = $user->getRole->role;
            $this->first_name = $user->first_name;
            $this->last_name = $user->last_name;
            $this->name = $this->first_name . ' ' . $this->last_name;
            $this->profile_picture_id = $user->profile_picture_id;
            $this->password = $user->password;
        }
    }

    public function render()
    {
        return view('livewire.profile.profile-livewire');
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

    public function resetInputs()
    {
        $user = UserAccounts::find($this->user_id);
        $this->username = $user->username;
        $this->password = $user->password;
        $this->profile_picture = null;
    }

    public function update()
    {
        $rules = [
            'username' => 'required|unique:user_accounts,username,' . $this->user_id . '|max:255',
            'password' => 'required|max:255',
            'profile_picture' => 'nullable|image|mimes:jpeg,png,jpg|max:1024'
        ];

        $customMessages = [
            'profile_picture.image' => 'The profile picture must be an image file.',
            'profile_picture.mimes' => 'The profile picture must be in JPEG, PNG, or JPG format.',
            'profile_picture.max' => 'The profile picture may not be greater than 1MB.',
        ];

        $validatedData = $this->validate($rules, $customMessages);
        $validatedData['hashed_password'] = Hash::make($validatedData['password']);

        $user = UserAccounts::find($this->user_id);
        if ($this->profile_picture) {
            $profileImageContent = file_get_contents($this->profile_picture->getRealPath());

            // Create a new profile picture record
            ProfilePictures::find($this->profile_picture_id)->update([
                'profile_picture' => $profileImageContent
            ]);
        }

        $user->update([
            'username' => $validatedData['username'],
            'password' => $validatedData['password'],
            'hashed_password' => $validatedData['hashed_password'],
            'profile_picture_id' => $this->profile_picture_id
        ]);
        $this->showToast('Your Profile Updated Successfully');
        $this->updateProfile($this->profile_picture_id);
        $this->resetInputs();
    }

    public function updateProfile($profile_id)
    {
        $this->dispatch('profileUpdated', $profile_id);
    }

    public function logout()
    {
        session()->forget('user_id');
        return redirect()->route('home-page');
    }

    public function showToast($message)
    {
        session()->flash('message', $message);
        $this->dispatch('showToast');
    }
}
