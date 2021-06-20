<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;


class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            ['category_id' => 1,
            'name' => 'Sofa Baleria',
            'base_image' => 'images/products/sofa_baleria.png',
            'view_count' => 25,
            'last_viewed_on' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            ['category_id' => 1,
            'name' => 'Fabric Sofa',
            'base_image' => 'images/products/fabric_sofa.png',
            'view_count' => 20,
            'last_viewed_on' => Carbon::now()->format('Y-m-d H:i:s'),

            ],
            ['category_id' => 2,
            'name' => 'Dining Table',
            'base_image' => 'images/products/dining_table.png',
            'view_count' => 15,
            'last_viewed_on' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            ]);
    }
}
