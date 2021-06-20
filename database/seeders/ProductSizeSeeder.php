<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class ProductSizeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('product_sizes')->insert([
            ['product_id' => 1,
            'label' => '6x3',
            ],
            ['product_id' => 1,
            'label' => '6x4',
            ],
            ['product_id' => 1,
            'label' => '6x6',
            ],
            ['product_id' => 2,
            'label' => '6x4',
            ],
            ['product_id' => 2,
            'label' => '6x5',
            ],
            ['product_id' => 3,
            'label' => '6x6',
            ]
            ]);
    }
}
