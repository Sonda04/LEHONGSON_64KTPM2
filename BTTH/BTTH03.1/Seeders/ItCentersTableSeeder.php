<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ItCentersTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('it_centers')->insert([
            [
                'name' => 'Trung tâm Tin học TLU',
                'location' => '456 Đường Tay Son, TP.HCM',
                'contact_email' => 'Tluitcentre@edu.com',
            ],
            [
                'name' => 'Trung tâm Tin học BK',
                'location' => '789 Đường Le Thanh Nghi, Hà Nội',
                'contact_email' => 'tinhocbk@gmail.com',
                
            ],
        ]);
    }
}
