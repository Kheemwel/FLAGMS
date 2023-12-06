<?php

namespace App\Livewire;

use App\Models\Notifications;
use App\Models\ProfilePictures;
use App\Models\UserAccounts;
use App\Traits\Toasts;
use Livewire\Component;

class TopNavigationLivewire extends Component
{
    use Toasts;
    public $user_id, $role, $first_name, $profile_picture_id;
    public $my_id, $notifications, $unread_count;
    protected $listeners = ['profileUpdated', 'newNotification' => 'loadNotifications'];

    public function mount()
    {
        $this->user_id = session('user_id');
        if ($this->user_id) {
            $user = UserAccounts::find($this->user_id);
            $this->role = $user->role;
            $this->first_name = $user->first_name;
            $this->profile_picture_id = $user->profile_picture_id;
            $this->my_id = $user->id;
        }
    }
    public function render()
    {
        $notification = Notifications::with('FromUser', 'ToUser')->where('to_user', $this->my_id)->orderBy('id', 'desc')->take(5)->get();
        if ($this->notifications && $this->notifications->last() && ($this->notifications->last()->id != $notification->first()->id)) {
            $this->showToast('info', 'You receive new notification');
        }
        $this->unread_count = Notifications::where('to_user', $this->my_id)->where('is_read', false)->count();
        $this->notifications = $notification;
        return view('livewire.dashboard.top-navigation-livewire');
    } 

    
    public function loadNotifications()
    {
        //;
    }

    public function readAll()
    {
        Notifications::query()->update([
            'is_read' => true
        ]);
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
