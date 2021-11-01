<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMasterBerkasPegawaiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('master_berkas_pegawai', function (Blueprint $table) {
            $table->string('kode', 10)->primary();
            $table->enum('kategori', ['Tenaga klinis Dokter Umum', 'Tenaga klinis Dokter Spesialis', 'Tenaga klinis Perawat dan Bidan', 'Tenaga klinis Profesi Lain', 'Tenaga Non Klinis']);
            $table->string('nama_berkas', 300);
            $table->tinyInteger('no_urut');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('master_berkas_pegawai');
    }
}
