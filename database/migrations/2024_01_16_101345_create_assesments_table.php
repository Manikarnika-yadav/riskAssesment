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
        Schema::create('assesments', function (Blueprint $table) {
            $table->id();
            $table->string('risk_scenerio');
            $table->string('threat');
            $table->integer('threat_prob');
            $table->string('vulnerability');
            $table->integer('vulnerability_crit');
            $table->string('cia');
            $table->string('access');
            $table->string('actors');
            $table->string('motive');
            $table->string('likelihood');
            $table->integer('risk_val');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('assesments');
    }
};
