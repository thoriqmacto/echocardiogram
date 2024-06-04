<?php

use App\Models\Cardiologist;
use App\Models\Hospital;
use App\Models\Patient;
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
        Schema::create('hospitals', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('address');
            $table->string('phone');
            $table->string('email')->unique();
            $table->string('fax')->nullable();
            $table->string('unit')->nullable();
            $table->string('logo_url')->nullable();
            $table->timestamps();
        });

        Schema::create('hospital_cardiologist', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Hospital::class)->constrained();
            $table->foreignIdFor(Cardiologist::class)->constrained();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hospitals');
        Schema::dropIfExists('hospital_cardiologist');
    }
};
