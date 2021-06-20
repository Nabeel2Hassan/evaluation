<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductRentTenureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('product_rent_tenures')->insert([
            ['product_id' => 1,
            'label' => 'month',
            'tenure_in_hours' => '730',
            ],
            ['product_id' => 1,
            'label' => '2 months',
            'tenure_in_hours' => '1460',
            ],
            ['product_id' => 1,
            'label' => '3 months',
            'tenure_in_hours' => '2190',
            ],
            ['product_id' => 2,
            'label' => '2 months',
            'tenure_in_hours' => '1460',
            ],
            ['product_id' => 2,
            'label' => '3 months',
            'tenure_in_hours' => '2190',
            ],
            ['product_id' => 3,
            'label' => 'month',
            'tenure_in_hours' => '730',
            ],
            ]);
    }
}
