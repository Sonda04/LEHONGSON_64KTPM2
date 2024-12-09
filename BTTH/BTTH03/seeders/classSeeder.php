<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Str;
 use Illuminate\Support\Facades\DB;


class classSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
 for ($i = 0; $i < 100; $i++) {
 DB::table('classes')->insert([
        'grade_level' => $faker->randomElement(['Pre-K','Kidergarten']),
        'room_number'=>Str::random(10),]);
        
    }
}}
