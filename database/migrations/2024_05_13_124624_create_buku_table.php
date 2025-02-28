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
        Schema::create('buku', function (Blueprint $table) {
            $table->unsignedBigInteger('no_buku')->unique();
            $table->string('judul');
            $table->string('edisi');
            /** 
            $table->unsignedBigInteger('id_rak');
            $table->foreign('id_rak')->references('id_rak')->on('rak');
            */
            $table->string('tahun');
            $table->string('penerbit');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('buku');
    }
};
