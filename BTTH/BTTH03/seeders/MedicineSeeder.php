<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Faker\Factory as Faker;
 use Illuminate\Support\Facades\DB;

class MedicineSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
 for ($i = 0; $i < 100; $i++) {
 DB::table('medicines')->insert([
    'name'=>Str::random(255),
        'brand'=>Str::random(100),
        'dosage'=>Str::random(50),
        'form'=>Str::random(50),
        'price'=>$faker->randomFloat(10,2),
        'stock'=>$faker->randomDigit(),
        
]);
 }
    }
}
