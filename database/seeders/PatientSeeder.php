<?php

namespace Database\Seeders;

use App\Models\Patient;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PatientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            'id' => 1,
            'name' => 'Suhaicih Orin',
            'mrn' => '2023540463',
            'age' => 59,
            'gender' => 'Female',
            'study_date' => date('Y/m/d',strtotime('2024/01/03')),
            'birth_date' => date('Y/m/d',strtotime('1964/07/17')),
            'height' => 155,
            'weight' => 89,
            'bsa' => 1.87,
            'bpl' => 88,
            'bph' => 163,
            'diagnose' => 'HOCM, MR moderate',
            'physician' => 'dr Dwita Ryan, SpJP',
            'created_at' => Carbon::create(2024, 1, 3,16,14,6),
            'updated_at' => Carbon::create(2024,1,5,15,18,4),
        ];

        DB::table('patients')->insert($data);
    }
}
