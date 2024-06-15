<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    function up(): void
    {
        Schema::create('siswa', function (Blueprint $table) {
            $table->id();
            $table->integer('NIM');
            $table->string('Nama');
            $table->string('Alamat');
            $table->string('No_HP');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    function down(): void
    {
        Schema::dropIfExists('siswa');
    }
};
