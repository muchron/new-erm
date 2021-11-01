<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePcarePendaftaranTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pcare_pendaftaran', function (Blueprint $table) {
            $table->string('no_rawat', 17)->primary();
            $table->date('tglDaftar');
            $table->string('no_rkm_medis', 15);
            $table->string('nm_pasien', 40);
            $table->string('kdProviderPeserta', 15);
            $table->string('noKartu', 25);
            $table->string('kdPoli', 5);
            $table->string('nmPoli', 50);
            $table->string('keluhan', 400);
            $table->enum('kunjSakit', ['Kunjungan Sakit', 'Kunjungan Sehat']);
            $table->string('sistole', 3);
            $table->string('diastole', 3);
            $table->string('beratBadan', 5);
            $table->string('tinggiBadan', 5);
            $table->string('respRate', 3);
            $table->string('heartRate', 3);
            $table->string('rujukBalik', 3);
            $table->enum('kdTkp', ['10 Rawat Jalan', '20 Rawat Inap', '50 Promotif Preventif']);
            $table->string('noUrut', 5);
            $table->enum('status', ['Terkirim', 'Gagal']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pcare_pendaftaran');
    }
}
