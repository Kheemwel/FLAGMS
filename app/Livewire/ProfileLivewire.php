<?php

namespace App\Livewire;

use App\Models\ProfilePictures;
use App\Models\Roles;
use App\Models\UserAccounts;
use App\Traits\Toasts;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;
use Livewire\WithFileUploads;

class ProfileLivewire extends Component
{
    use Toasts;
    use WithFileUploads;
    public $user_id, $email, $role, $first_name, $last_name, $name, $password;
    public  $profile_picture_id, $profile_picture;
    public $current_password, $new_password, $confirm_password;

    public function mount()
    {
        $this->user_id = session('user_id');
        if ($this->user_id) {
            $user = UserAccounts::find($this->user_id);
            $this->email = $user->email;
            $this->role = $user->role;
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
        $this->email = $user->email;
        $this->password = $user->password;
        $this->profile_picture = null;
        $this->current_password = null;
        $this->new_password = null;
        $this->confirm_password = null;
        $this->resetErrorBag();
    }

    public function updateProfile()
    {
        $rules = [
            'email' => 'required|email|unique:user_accounts,email,' . $this->user_id . '|max:255',
            'profile_picture' => 'nullable|image|mimes:jpeg,png,jpg|max:1024'
        ];

        $customMessages = [
            'profile_picture.image' => 'The profile picture must be an image file.',
            'profile_picture.mimes' => 'The profile picture must be in JPEG, PNG, or JPG format.',
            'profile_picture.max' => 'The profile picture may not be greater than 1MB.',
        ];

        $validatedData = $this->validate($rules, $customMessages);

        $user = UserAccounts::find($this->user_id);
        if ($this->profile_picture) {
            $profileImageContent = file_get_contents($this->profile_picture->getRealPath());

            // Create a new profile picture record
            if ($this->profile_picture_id) {
                $newProfile = ProfilePictures::find($this->profile_picture_id)->update([
                    'profile_picture' => $profileImageContent
                ]);
            } else {
                $newProfile = ProfilePictures::create([
                    'profile_picture' => $profileImageContent
                ]);
                $this->profile_picture_id = $newProfile->id;
            }
        }

        $user->update([
            'email' => $validatedData['email'],
            'profile_picture_id' => $this->profile_picture_id
        ]);
        $this->showToast('success', 'Your Profile Updated Successfully');
        $this->updateProfilePicture($this->profile_picture_id);
        $this->resetInputs();
    }

    public function changePassword()
    {
        $validatedData = $this->validate([
            'current_password' => 'required|same:password',
            'new_password' => 'required|min:4', // Change the min length as needed
            'confirm_password' => 'required|same:new_password',
        ], [
            'current_password.same' => 'The current password is incorrent',
            'confirm_password.same' => 'The new password and confirmation do not match.',
        ]);

        // Update the password
        UserAccounts::find($this->user_id)->update([
            'password' => $validatedData['confirm_password'],
            'hashed_password' => bcrypt($validatedData['confirm_password'])
        ]);

        $this->showToast('success', 'Your password has been updated successfully.');
        $this->resetInputs();
    }

    public function updateProfilePicture($profile_id)
    {
        $this->dispatch('profileUpdated', $profile_id);
    }
}
