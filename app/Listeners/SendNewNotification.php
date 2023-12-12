<?php

namespace App\Listeners;

use App\Events\NewNotification;
use App\Traits\Toasts;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Log;
use Livewire\Component;

class SendNewNotification implements ShouldQueue
{
    use InteractsWithQueue;
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(NewNotification $event)
    {
        // for ($i=0; $i < 99; $i++) { 
        //     Log::info($i);
        // }
    }
}
