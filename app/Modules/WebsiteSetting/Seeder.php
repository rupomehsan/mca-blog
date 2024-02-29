<?php

namespace App\Modules\WebsiteSetting;

use Illuminate\Database\Seeder as SeedersSeeder;

class Seeder extends SeedersSeeder
{
    /**
     * Run the database seeds.
     */
    static $model = \App\Modules\WebsiteSetting\Model::class;
    public function run(): void
    {
        self::$model::truncate();

        $data = [
            [
                'field_title' => 'site title',
                'field_value' => 'Modern Cooking Academy',
            ],
            [
                'field_title' => 'site logo',
                'field_value' => 'frontend/images/logo.png',
                'is_image' => 1,
            ],
            [
                'field_title' => 'contact number',
                'field_value' => '01333322657,01333322658',
            ],
            [
                'field_title' => 'address',
                'field_value' => 'https://www.facebook.com/moderncookingacademy',
            ],
            [
                'field_title' => 'facebook',
                'field_value' => 'https://www.facebook.com/moderncookingacademy
                ',
            ],
            [
                'field_title' => 'youtube',
                'field_value' => 'https://www.youtube.com/@moderncookingacademy
                ',
            ],
            [
                'field_title' => 'instagram',
                'field_value' => 'https://www.instagram.com/moderncookingacademy',
            ],
            [
                'field_title' => 'twitter',
                'field_value' => 'https://twitter.com/modern_cooking_',
            ],
            [
                'field_title' => 'gmail',
                'field_value' => 'moderncookingacademy@gmail.com',
            ],

        ];

        foreach ($data as $item) {
            self::$model::create($item);
        }
    }
}
