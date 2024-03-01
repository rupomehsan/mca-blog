<?php
namespace App\Modules\Contactus;

use Illuminate\Database\Seeder as SeedersSeeder;

class Seeder extends SeedersSeeder
{
    /**
     * Run the database seeds.
     */
    static $model = \App\Modules\Contactus\Model::class;
    public function run(): void
    {
        self::$model::truncate();
        self::$model::create([
            "title" => " ",
        ]);
    }
}