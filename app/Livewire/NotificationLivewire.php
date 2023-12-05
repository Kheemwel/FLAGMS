<?php

namespace App\Livewire;

use App\Events\NewNotification;
use App\Models\Notifications;
use App\Models\UserAccounts;
use App\Traits\Toasts;
use Livewire\Component;

class NotificationLivewire extends Component
{
    use Toasts;
    public $my_id, $notifications;
    protected $listeners = ['newNotification' => 'loadNotifications'];

    public function mount()
    {
        $id = session('user_id');
        if ($id) {
            $this->my_id = UserAccounts::find($id)->id;
        }
    }

    public function render()
    {
        $notification = Notifications::with('FromUser', 'ToUser')->where('to_user', $this->my_id)->orderBy('id', 'desc')->get();
        if ($this->notifications && $this->notifications->last() && ($this->notifications->last()->id != $notification->first()->id)) {
            $this->showToast('info', 'You receive new notification');
        }
        $this->notifications = $notification;
        return view('livewire.notification.notification-livewire');
    }

    public function loadNotifications()
    {
        //;
    }

    public function read($id)
    {
        $notif = Notifications::find($id);
        $notif->is_read = true;
        $notif->save();
    }
}
