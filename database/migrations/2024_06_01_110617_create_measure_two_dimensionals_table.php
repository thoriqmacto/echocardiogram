<?php

use App\Models\Echogram;
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
        Schema::create('measure_two_dimensionals', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Echogram::class);
            $table->double('measure_2d_ivsd')->nullable();
            $table->double('measure_2d_ivss')->nullable();
            $table->double('measure_2d_lvidd')->nullable();
            $table->double('measure_2d_lvids')->nullable();
            $table->double('measure_2d_lvpwd')->nullable();
            $table->double('measure_2d_lvpws')->nullable();
            $table->double('measure_2d_aordiam')->nullable();
            $table->double('measure_2d_ladimen')->nullable();
            $table->double('measure_2d_lvotdiam')->nullable();
            $table->double('measure_2d_laperao')->nullable();
            $table->double('measure_2d_lavi')->nullable();
            $table->double('measure_2d_lvmassindex')->nullable();
            $table->double('measure_2d_edvteich')->nullable();
            $table->double('measure_2d_esvteich')->nullable();
            $table->double('measure_2d_fs')->nullable();
            $table->double('measure_2d_tapse')->nullable();
            $table->double('measure_2d_efteich')->nullable();
            $table->double('measure_2d_efsimpbiplane')->nullable();
            $table->double('measure_2d_efsimp4ch')->nullable();
            $table->double('measure_2d_efsimp2ch')->nullable();
            $table->double('measure_2d_ivcins')->nullable();
            $table->double('measure_2d_ivcexp')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('measure_two_dimensionals');
    }
};
