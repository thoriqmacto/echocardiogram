<?php

use App\Models\Cardiologist;
use App\Models\Diagnostic;
use App\Models\MeasureDoppler;
use App\Models\MeasureTwoDimensional;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('echograms', function (Blueprint $table) {
            $table->id();

            // relationships
            $table->foreignIdFor(Cardiologist::class);
            $table->foreignIdFor(Diagnostic::class);
            $table->foreignIdFor(MeasureTwoDimensional::class);
            $table->foreignIdFor(MeasureDoppler::class);

            // related to TEE Procedure
            $table->string('anesthesia')->nullable();
            $table->string('sedation')->nullable();
            $table->string('duration')->nullable();
            $table->string('complication')->nullable();

            // findings
            $table->text('findings'); // serialize of findings which constructed in array

            // general
            $table->text('conclusion')->nullable();
            $table->text('comments')->nullable();
            $table->string('device')->nullable();
            $table->string('operator')->nullable();
            $table->string('fellow')->nullable();
            $table->string('supervisor')->nullable();

            // timestamps
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('echograms');
    }
};
