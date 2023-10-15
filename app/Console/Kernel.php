<?php

namespace App\Console;

use App\Models\LostAndFound;
use DB;
use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;
use Illuminate\Support\Carbon;

class Kernel extends ConsoleKernel
{
    /**
     * Define the application's command schedule.
     */
    protected function schedule(Schedule $schedule): void
    {
        // $schedule->command('inspire')->hourly();
        $schedule->command('backup:clean')->weekly();
        $schedule->command('backup:run --only-db')->everyMinute();
        $schedule->call(function () {
            LostAndFound::where('is_claimed', false)->where('expiration', '<=', Carbon::now())->update(['is_expired' => true]);
        })->daily();
    }

    /**
     * Register the commands for the application.
     */
    protected function commands(): void
    {
        $this->load(__DIR__ . '/Commands');

        require base_path('routes/console.php');
    }
}
