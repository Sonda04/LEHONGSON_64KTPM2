<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Str;
 use Illuminate\Support\Facades\DB;

class issuseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        
        for ($i = 0; $i < 100; $i++) {
            $Computer_id = DB::table('computers')->pluck('id');
        DB::table('issues')->insert([
           'computer_id'=>$faker->randomElement($Computer_id),

               'reported_by'=>Str::random(50),
               'reported_date'=>$faker->dateTime(),
               'description'=>$faker->paragraph(),
               'urgency'=>$faker->randomElement(['Low','Medium','High']),
               'status'=>$faker->randomElement(['Open','In Progress','Resolved']),
               
        ]);
    }
}
}