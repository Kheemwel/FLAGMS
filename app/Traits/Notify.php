<?php
namespace App\Traits;

use App\Events\NewNotification;
use App\Models\Notifications;

trait Notify
{
    public function notify($from, $to, $message)
    {
        Notifications::create([
            'from_user' => $from,
            'to_user' => $to,
            'message' => $message,
        ]);
        NewNotification::dispatch();
    }
}
