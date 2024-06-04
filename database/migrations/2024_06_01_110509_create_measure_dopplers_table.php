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
        Schema::create('measure_dopplers', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Echogram::class);
            $table->double('measure_doppler_mvevel')->nullable();
            $table->double('measure_doppler_mvdt')->nullable();
            $table->double('measure_doppler_mvavel')->nullable();
            $table->double('measure_doppler_epera')->nullable();
            $table->double('measure_doppler_eperemedial')->nullable();
            $table->double('measure_doppler_eperelateral')->nullable();
            $table->double('measure_doppler_epereaverage')->nullable();
            $table->double('measure_doppler_mvvmax')->nullable();
            $table->double('measure_doppler_mvmeanpg')->nullable();
            $table->double('measure_doppler_mvaplan')->nullable();
            $table->double('measure_doppler_mvvti')->nullable();
            $table->double('measure_doppler_mvpht')->nullable();
            $table->double('measure_doppler_mvavti')->nullable();
            $table->double('measure_doppler_mvapht')->nullable();
            $table->double('measure_doppler_avvmax')->nullable();
            $table->double('measure_doppler_avmaxpg')->nullable();
            $table->double('measure_doppler_avmeanpg')->nullable();
            $table->double('measure_doppler_avvti')->nullable();
            $table->double('measure_doppler_avavti')->nullable();
            $table->double('measure_doppler_avavmax')->nullable();
            $table->double('measure_doppler_aipht')->nullable();
            $table->double('measure_doppler_aieroa')->nullable();
            $table->double('measure_doppler_lvotvti')->nullable();
            $table->double('measure_doppler_descaorta')->nullable();
            $table->double('measure_doppler_svlvot')->nullable();
            $table->double('measure_doppler_avaplan')->nullable();
            $table->double('measure_doppler_trvmaxsystolic')->nullable();
            $table->double('measure_doppler_trmaxpgsystolic')->nullable();
            $table->double('measure_doppler_tvmeanpgdiastolic')->nullable();
            $table->double('measure_doppler_tvvti')->nullable();
            $table->double('measure_doppler_pvacctime')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('measure_dopplers');
    }
};
