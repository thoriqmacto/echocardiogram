<?php

namespace Database\Seeders;

use App\Models\Cardiologist;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CardiologistSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'id' => 1,
                'name' => 'dr. Estu Rudiktyo, SpJP (K)',
                'is_operator' => true],
            [
                'id' => 2,
                'name' => 'dr. Dwita Ryan, SpJP',
                'is_operator' => false
            ],
            [
                'id' => 3,
                'name' => 'dr. Gusti Ayu Temi Vidianti, SpJP',
                'is_operator' => false
            ]
        ];

        DB::table('cardiologists')->insert($data);
    }
}
