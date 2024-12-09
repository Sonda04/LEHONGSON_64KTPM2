<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MoviesTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('movies')->insert([
            [
                'title' => 'Avengers: Endgame',
                'director' => 'Anthony và Joe Russo',
                'release_date' => '2019-04-26',
                'duration' => 181,
                'cinema_id' => 1,
                
            ],
            [
                'title' => 'Spider-Man: No Way Home',
                'director' => 'Jon Watts',
                'release_date' => '2021-12-17',
                'duration' => 148,
                'cinema_id' => 1,
            ],
            [
                'title' => 'The Batman',
                'director' => 'Matt Reeves',
                'release_date' => '2022-03-04',
                'duration' => 175,
                'cinema_id' => 2, 
            ],
        ]);
    }
}
