<?php

namespace Database\Seeders;

use App\Models\MenuItem;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MenuItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $title = [
            'Все туры',
            'Отзывы',
            'Контанты',
        ];

        foreach ($title as $data){
            MenuItem::create(['title' => $data]);
        }
    }
}
