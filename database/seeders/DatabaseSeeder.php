<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Modules\Category\Seeder as CategorySeeder;
use App\Modules\User\Seeder as UserSeeder;
use App\Modules\WebsiteSetting\Seeder as WebsiteSetting;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            UserSeeder::class,
            CategorySeeder::class,
            WebsiteSetting::class,
        ]);
    }
}
