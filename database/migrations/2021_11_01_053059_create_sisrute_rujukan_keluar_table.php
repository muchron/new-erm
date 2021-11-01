<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSisruteRujukanKeluarTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sisrute_rujukan_keluar', function (Blueprint $table) {
            $table->string('no_rawat', 17)->primary();
            $table->string('no_rujuk', 40);
            $table->string('no_rkm_medis', 15);
            $table->string('nm_pasien', 40);
            $table->string('no_ktp', 20);
            $table->string('no_peserta', 25);
            $table->enum('jk', ['L', 'P']);
            $table->date('tgl_lahir');
            $table->string('tmp_lahir', 15);
            $table->string('alamat', 200);
            $table->string('no_tlp', 40);
            $table->enum('jns_rujukan', ['1. Rawat Jalan', '2. Rawat Darurat/Inap', '3. Parsial']);
            $table->dateTime('tgl_rujuk');
            $table->string('kd_faskes_tujuan', 12);
            $table->string('nm_faskes_tujuan', 200);
            $table->string('kd_alasan', 5);
            $table->string('alasan_rujuk', 150);
            $table->string('alasan_lainnya', 50);
            $table->string('kd_diagnosa', 10);
            $table->text('diagnosa_rujuk');
            $table->string('nik_dokter', 20);
            $table->string('dokter_perujuk', 50);
            $table->string('nik_petugas', 20);
            $table->string('petugas_entry', 50);
            $table->text('anamnesis_pemeriksaan');
            $table->enum('kesadaran', ['1. Sadar', '2. Tidak Sadar']);
            $table->string('tekanan_darah', 7);
            $table->string('nadi', 3);
            $table->string('suhu', 5);
            $table->string('respirasi', 3);
            $table->text('keadaan_umum');
            $table->enum('tingkat_nyeri', ['0. Tidak Nyeri', '1. Ringan', '2. Sedang', '3. Berat']);
            $table->string('alergi', 50);
            $table->text('laboratorium');
            $table->text('radiologi');
            $table->text('terapitindakan');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sisrute_rujukan_keluar');
    }
}
