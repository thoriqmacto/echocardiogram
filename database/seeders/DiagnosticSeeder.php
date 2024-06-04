<?php

namespace Database\Seeders;

use App\Models\Diagnostic;
use App\Models\Finding;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DiagnosticSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            'id' => 1,
            'name' => 'Transesophageal Echocardiography Report',
            'type' => 'non-invasive',
        ];
        DB::table('diagnostics')->insert($data);

        // Assign finding to Diagnostic method
        $diagnostic = Diagnostic::find(1);
        if($diagnostic){
            $findings = Finding::all();
            foreach($findings as $finding){
                $finding->diagnostics()->attach($diagnostic->id);
            }
        }
    }
}
