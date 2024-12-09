<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HardwareDevicesTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('hardware_devices')->insert([
            [
                'device_name' => 'Logitech G502',
                'type' => 'Mouse',
                'status' => true,
                'center_id' => 1, // Thuộc Trung tâm ABC
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'device_name' => 'Corsair K95',
                'type' => 'Keyboard',
                'status' => false,
                'center_id' => 1,
                
            ],
            [
                'device_name' => 'HyperX Cloud II',
                'type' => 'Headset',
                'status' => true,
                'center_id' => 2,
            ],
        ]);
    }
}
