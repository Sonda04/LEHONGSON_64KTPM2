<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LibrariesTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('libraries')->insert([
            [
                'name' => 'Thư viện IT Đại học Bachs Khoa',
                'address' => '123 Đường Tran Dai Nghia, Hà Nội',
                'contact_number' => '0123456789',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Thư viện Khoa Hocj Tong Hop ',
                'address' => '456 Đường Nguyen Trai, TP.HCM',
                'contact_number' => '0987654321',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
