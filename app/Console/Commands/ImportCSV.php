<?php

namespace App\Console\Commands;

use App\Exports\UsersAccountsExport;
use App\Imports\UserAccountsImport;
use Illuminate\Console\Command;

class ImportCSV extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'import:excel';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Laravel CSV Importer';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $this->output->title('Starting import');
        (new UserAccountsImport)->withOutput($this->output)->import("C:\Users\Kimwel\Documents\users.csv");
        $this->output->success('Import successful');
    }
}
