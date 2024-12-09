<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LaptopsTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('laptops')->insert([
            [
                'brand' => 'Dell',
                'model' => 'Inspiron 15 3000',
                'specifications' => 'i5, 8GB RAM, 256GB SSD',
                'rental_status' => true,
                'renter_id' => 1,
            ],
            [
                'brand' => 'HP',
                'model' => 'Pavilion 14',
                'specifications' => 'i7, 16GB RAM, 512GB SSD',
                'rental_status' => false,
                'renter_id' => null,
                
            ],
        ]);
    }
}
