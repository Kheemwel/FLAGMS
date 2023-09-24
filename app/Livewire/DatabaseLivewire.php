<?php

namespace App\Livewire;

use App\Traits\Toasts;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;

class DatabaseLivewire extends Component
{
    use Toasts;
    public $backups = [];

    public function mount()
    {
        $this->loadBackups();
    }

    public function render()
    {
        return view('livewire.file_management.database.database-livewire');
    }

    public function createBackup()
    {
        // Use the Spatie Backup package to create a backup
        Artisan::queue('backup:run');
        debugMessage(Artisan::output());

        $this->showToast('success', "Backup Created Successfully.");

        $this->loadBackups();
    }

    public function restoreBackup($backupName)
    {
        // Use the Spatie Backup package to restore a backup
        Artisan::call('backup:restore', ['name' => $backupName]);

        $this->loadBackups();
    }

    public function deleteBackup($backupName)
    {
        // Use the Spatie Backup package to delete a backup
        Artisan::call('backup:clean', ['--remove' => [$backupName]]);

        $this->loadBackups();
    }

    private function loadBackups()
    {
        $this->backups = collect(Storage::disk('local')->files('Laravel'))
            ->map(function ($file) {
                return [
                    'name' => basename($file),
                    'size' => $this->humanFileSize(Storage::disk('local')->size($file)),
                    'date' => Carbon::createFromTimestamp(Storage::disk('local')->lastModified($file))->toDateTimeString(),
                ];
            })
            ->sortByDesc('date')
            ->values()
            ->toArray();
    }

    private function humanFileSize($size, $unit = "")
    {
        if ((!$unit && $size >= 1 << 30) || $unit == "GB") {
            return number_format($size / (1 << 30), 2) . " GB";
        }
        if ((!$unit && $size >= 1 << 20) || $unit == "MB") {
            return number_format($size / (1 << 20), 2) . " MB";
        }
        if ((!$unit && $size >= 1 << 10) || $unit == "KB") {
            return number_format($size / (1 << 10), 2) . " KB";
        }
        return number_format($size) . " bytes";
    }
}
