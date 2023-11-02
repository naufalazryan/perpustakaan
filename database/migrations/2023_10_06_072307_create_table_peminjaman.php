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
        Schema::create('peminjaman', function (Blueprint $table) {
            $table->id();
            $table->string('nomor_pinjam')->unique();
            $table->date('tanggal_pinjam');
            $table->date('tanggal_kembali')->nullable();

            $table->unsignedBigInteger('kode_buku');
            $table->unsignedBigInteger('nomor_anggota');
            $table->unsignedBigInteger('nomor_petugas');

            $table->foreign('kode_buku')->references('id')->on('buku');
            $table->foreign('nomor_anggota')->references('id')->on('anggota');
            $table->foreign('nomor_petugas')->references('id')->on('petugas');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Hapus constraint foreign key terlebih dahulu
        Schema::table('peminjaman', function (Blueprint $table) {
            $table->dropForeign(['kode_buku']);
            $table->dropForeign(['nomor_anggota']);
            $table->dropForeign(['nomor_petugas']);
        });

        Schema::dropIfExists('peminjaman');
    }
};
