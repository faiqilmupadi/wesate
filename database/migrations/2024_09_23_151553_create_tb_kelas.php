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
        Schema::create('kelas', function (Blueprint $table) {
            $table->string('nama_kelas', 10)->primary(); // Primary key untuk nama kelas
            $table->string('kode_mk', 8); // Foreign key untuk kode mata kuliah
            $table->foreign('kode_mk')->references('kode_mk')->on('matakuliah')->onDelete('cascade'); // Menambahkan foreign key ke tabel matakuliah
            $table->timestamps(); // Untuk mencatat waktu pembuatan dan update
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kelas');
    }
};