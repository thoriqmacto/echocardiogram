<?php

use App\Models\Diagnostic;
use App\Models\Finding;
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
        Schema::create('diagnostics', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('type');
            $table->timestamps();
        });

        Schema::create('diagnostic_finding', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Diagnostic::class)->constrained();
            $table->foreignIdFor(Finding::class)->constrained();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('diagnostics');
    }
};
