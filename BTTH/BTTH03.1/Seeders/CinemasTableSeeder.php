<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CinemasTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('cinemas')->insert([
            [
                'name' => 'CGV Vincom',
                'location' => 'Vincom Center, Hà Nội',
                'total_seats' => 350,
              
            ],
            [
                'name' => 'Lotte Cinema',
                'location' => 'Lotte Tower, TP.HCM',
                'total_seats' => 500,
            ],
        ]);
    }
}
