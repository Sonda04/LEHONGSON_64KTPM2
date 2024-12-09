<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\sale;
use Faker\Factory as Faker;
 use Illuminate\Support\Facades\DB;
 use Database\Seeders\MedicineSeeder;
class SaleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
 for ($i = 0; $i < 100; $i++) {
    $Medicine_id = DB::table('medicines')->pluck('medicine_id');   
 DB::table('sales')->insert([
    'medicine_id' =>$faker->randomElement($Medicine_id) ,
            'quantity'=>$faker->randomDigit(),
            'sale_date'=>$faker->dateTime(),
            'customer_phone' => str()->random(10),
            
]);
 }
    }
}
