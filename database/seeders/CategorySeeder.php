<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            ['name' => 'Bed Room',
            'icon' => 'icons/category/bed_room.png',
            ],
            ['name' => 'Living Room',
            'icon' => 'icons/category/living_room.png'],
            ]);
    }
}
