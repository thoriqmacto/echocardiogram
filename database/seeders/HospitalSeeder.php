<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HospitalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            'id' => 1,
            'name' => 'Pusat Jantung Nasional Harapan Kita Jakarta',
            'address' => 'Jl. S. Parman Kav. 87, Jakarta Barat',
            'phone' => '021-5684085, 021-5684093',
            'email' => 'harapankitakarta@pjnhk.com',
            'fax' => '021-5684130',
            'unit' => 'Unit Pelaksana Fungsional (UPF) Diagnostik NON INVASIF',
            'logo_url' => url('/pjnhk-logo.png'),
        ];

        DB::table('hospitals')->insert($data);
    }
}
