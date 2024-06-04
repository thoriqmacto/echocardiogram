<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EchogramSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Seeds initial echogram data (taken from Transesophageal Report)
        $data = require database_path('seeders/ArrayDataEchograms.php');
        DB::table('echograms')->insert($data);
    }
}
