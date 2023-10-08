<?php

namespace App\Livewire;

use App\Traits\Toasts;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Livewire\Component;
use ZipArchive;

class DatabaseLivewire extends Component
{
    use Toasts;
    public $backups = [];

    public function render()
    {
        $this->loadBackups();
        return view('livewire.file_management.database.database-livewire');
    }

    public function createBackup()
    {
        // Use the Spatie Backup package to create a backup
        Artisan::call('backup:run --only-db');

        $this->showToast('success', "Backup Created Successfully.");
    }

    public function restoreBackup($backupName)
    {
        // Define the backup zip file path and extraction directory
        $backupZipPath = storage_path("app/FLAGMS/$backupName");
        $extractionDirectory = storage_path('app/backup-temp/extracted');

        // Extract the zip file
        Storage::disk('local')->makeDirectory($extractionDirectory);

        $zip = new ZipArchive;

        $res = $zip->open($backupZipPath);

        if ($res === true) {
            $zip->extractTo($extractionDirectory);
            $zip->close();
        }

        // List files in the extraction directory and locate the SQL dump file
        $files = Storage::disk('local')->files("backup-temp/extracted/db-dumps");

        foreach ($files as $key => $value) {
            // You may need to filter or search for the correct file based on your naming convention
            // Example: Look for files ending with .sql
            $sqlDumpFile = Str::endsWith($value, '.sql') ? $value : null;
            if ($sqlDumpFile) break;
        }

        // Ensure that you have found the correct SQL dump file
        if ($sqlDumpFile) {
            // Get the path to the SQL dump file
            $sqlDumpPath = Storage::path($sqlDumpFile);

            // Perform a database restoration (you may need to adjust this based on your setup)
            DB::unprepared(file_get_contents($sqlDumpPath));
        } else {
            // Handle the case where no SQL dump file was found
            $this->showToast('error', "Failed to restore backup");
        }

        // Delete the extraction directory
        if ($this->deleteDirectory('backup-temp/extracted')) {
            $this->showToast('success', "Backup Restored Successfully.");
        } else {
            $this->showToast('info', "Extracted backup is no deleted");
        }
    }

    function deleteDirectory($dirPath)
    {
        // Get the list of files and directories in the given directory
        $contents = Storage::disk('local')->allFiles($dirPath);
    
        foreach ($contents as $path) {
            // Check if the path exists
            if (Storage::disk('local')->exists($path)) {
                // Delete the file or directory
                Storage::disk('local')->delete($path);
            }
        }
    
        // Delete the empty directory
        return Storage::disk('local')->deleteDirectory($dirPath);
    }

    public function deleteBackup($backupName)
    {
        try {
            // Use the Storage facade to delete the backup file
            Storage::delete(config('app.name') . "/$backupName");

            $this->showToast('success', "Backup Deleted Successfully.");
        } catch (\Exception $e) {
            $this->showToast('error', "Failed to delete backup: " . $e->getMessage());
        }
    }

    private function loadBackups()
    {
        $this->backups = collect(Storage::disk('local')->files(config('app.name')))
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
