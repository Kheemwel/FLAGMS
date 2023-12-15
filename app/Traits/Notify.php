<?php

namespace App\Traits;

use App\Events\NewNotification;
use App\Models\Notifications;

trait Notify
{
    public function notify($from, $to, $message, $go_to)
    {
        $url_path = '';
        switch ($go_to) {
            case 'request':
                $url_path = '/request-forms';
                break;
            case 'approval':
                $url_path = '/approval-forms';
                break;
            case 'schedule':
                $url_path = '/guidance-program';
                break;
            case 'student-anecdotal':
                $url_path = '/student-anecdotal-record';
                break;
            case 'child-anecdotal':
                $url_path = '/my-child-records';
                break;
            case 'fill-out':
                $url_path = '/fill-out-forms';
                break;
        }
        Notifications::create([
            'from_user' => $from,
            'to_user' => $to,
            'message' => $message,
            'url' => $url_path,
        ]);
        NewNotification::dispatch();
    }
}
