<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class ProductPriceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('product_prices')->insert([
            ['product_id' => 1,
            'product_size_id' => 1,
            'product_rent_tenure_id' => 1,
            'price' => 200,
            'discount' => 0,
            ],
            ['product_id' => 1,
            'product_size_id' => 2,
            'product_rent_tenure_id' => 2,
            'price' => 300,
            'discount' => 0,
            ],
            ['product_id' => 1,
            'product_size_id' => 3,
            'product_rent_tenure_id' => 3,
            'price' => 400,
            'discount' => 0,
            ],
            ['product_id' => 2,
            'product_size_id' => 4,
            'product_rent_tenure_id' => 4,
            'price' => 200,
            'discount' => 0,
            ],
            ['product_id' => 2,
            'product_size_id' => 5,
            'product_rent_tenure_id' => 4,
            'price' => 200,
            'discount' => 0,
            ],
            ['product_id' => 3,
            'product_size_id' => 6,
            'product_rent_tenure_id' => 6,
            'price' => 200,
            'discount' => 0,
            ],
            ]);
    }
}
