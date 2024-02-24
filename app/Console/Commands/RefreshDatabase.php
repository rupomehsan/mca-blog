<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Artisan;

class RefreshDatabase extends Command
{
    protected $signature = 'db:refresh';

    protected $description = 'Refresh the database and run all necessary migrations and seeds';

    public function handle()
    {
        $this->call('db:wipe');
        $this->call('migrate');
        $this->call('migrate', ['--path' => 'app/Modules/*/*']);
        $this->call('migrate', ['--path' => 'app/Modules/*']);
        $this->call('db:seed');
        $this->call('passport:install');

        $this->info('Database refreshed successfully.');
    }
}
