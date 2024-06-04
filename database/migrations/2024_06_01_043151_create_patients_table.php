<?php

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
        Schema::create('patients', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('mrn');
            $table->integer('age');
            $table->string('gender');
            $table->date('study_date');
            $table->date('birth_date');
            $table->integer('height');
            $table->integer('weight');
            $table->double('bsa');
            $table->integer('bpl'); // blood pressure low
            $table->integer('bph'); // blood pressure high
            $table->string('diagnose');
            $table->string('physician');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('patients');
    }
};
