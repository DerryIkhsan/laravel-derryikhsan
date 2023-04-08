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
        Schema::create('rumah_sakit', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('rumah_sakit', 200)->nullable();
            $table->string('alamat', 200)->nullable();
            $table->string('email', 100)->nullable();
            $table->string('telepon', 50)->nullable();
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
        Schema::dropIfExists('rumah_sakit');
    }
};
