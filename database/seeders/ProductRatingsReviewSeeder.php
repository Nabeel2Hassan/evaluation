<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductRatingsReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('product_ratings_reviews')->insert([
            ['product_id' => 1,
            'user_id' => 1,
            'ratting' => 4,
            'review' => 'all good',
            ],
            ['product_id' => 1,
            'user_id' => 1,
            'ratting' => 3,
            'review' => 'all is well',
            ],
            ['product_id' => 1,
            'user_id' => 1,
            'ratting' => 2,
            'review' => 'all good',
            ],
            ['product_id' => 2,
            'user_id' => 1,
            'ratting' => 5,
            'review' => 'all is good',
            ],
            ['product_id' => 2,
            'user_id' => 1,
            'ratting' => 5,
            'review' => 'all is good',
            ],
            ['product_id' => 3,
            'user_id' => 1,
            'ratting' => 4,
            'review' => 'all not good',
            ],
            ]);
    }
}
