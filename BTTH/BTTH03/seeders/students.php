<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Str;
 use Illuminate\Support\Facades\DB;


class students extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
 for ($i = 0; $i < 100; $i++) {
    $Class_id = DB::table('classes')->pluck('id');   
 DB::table('students')->insert([
    
    'first_name'=>$faker->name(),
        'last_name'=>$faker->name(),
        'date_of_birth'=>$faker->dateTime(),
        'parent_phone'=>Str::random(20),
        'class_id' =>$faker->randomElement($Class_id),
        
        
 ]); //
    }
}}
