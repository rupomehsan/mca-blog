<?php

namespace App\Modules\Category;

use Illuminate\Database\Seeder as SeedersSeeder;

class Seeder extends SeedersSeeder
{
    /**
     * Run the database seeds.
     */
    static $model = \App\Modules\Category\Model::class;
    public function run(): void
    {
        self::$model::truncate();

        self::$model::create([
            "title" => "Food",
            "for" => "blog",
        ]);
        self::$model::create([
            "title" => "Diploma",
            "for" => "course",
        ]);
    }
}
