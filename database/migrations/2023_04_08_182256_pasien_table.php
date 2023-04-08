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
        //
        Schema::create('pasien', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('pasien', 200)->nullable();
            $table->string('alamat', 200)->nullable();
            $table->string('telepon', 50)->nullable();
            $table->foreignId('id_rumah_sakit')->references('id')->on('rumah_sakit')->nullable();
            $table->softDeletes();
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
        Schema::dropIfExists('pasien');
    }
};
