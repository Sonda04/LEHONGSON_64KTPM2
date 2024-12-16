<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Str;
 use Illuminate\Support\Facades\DB;

class computerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
 for ($i = 0; $i < 100; $i++) {
 DB::table('computers')->insert([
    'computer_name'=>Str::random(40),
        'model'=>Str::random(100),
        'operating_system'=>Str::random(50),
        'processor'=>Str::random(50),
        'memory'=>$faker->randomNumber(5,false),
        'available'=>$faker->boolean(),
 ]);  
    }
}}
?>