<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePcareKunjunganUmumTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pcare_kunjungan_umum', function (Blueprint $table) {
            $table->string('no_rawat', 17)->primary();
            $table->string('noKunjungan', 40)->nullable();
            $table->date('tglDaftar')->nullable();
            $table->string('no_rkm_medis', 15)->nullable();
            $table->string('nm_pasien', 40)->nullable();
            $table->string('noKartu', 25)->nullable();
            $table->char('kdPoli', 5)->nullable();
            $table->string('nmPoli', 50)->nullable();
            $table->string('keluhan', 400)->nullable();
            $table->string('kdSadar', 5)->nullable();
            $table->string('nmSadar', 50)->nullable();
            $table->string('sistole', 3)->nullable();
            $table->string('diastole', 3)->nullable();
            $table->string('beratBadan', 5)->nullable();
            $table->string('tinggiBadan', 5)->nullable();
            $table->string('respRate', 3)->nullable();
            $table->string('heartRate', 3)->nullable();
            $table->string('terapi', 400)->nullable();
            $table->string('kdStatusPulang', 5)->nullable();
            $table->string('nmStatusPulang', 50)->nullable();
            $table->date('tglPulang')->nullable();
            $table->string('kdDokter', 20)->nullable();
            $table->string('nmDokter', 50)->nullable();
            $table->string('kdDiag1', 10)->nullable();
            $table->string('nmDiag1', 400)->nullable();
            $table->string('kdDiag2', 10)->nullable();
            $table->string('nmDiag2', 400)->nullable();
            $table->string('kdDiag3', 10)->nullable();
            $table->string('nmDiag3', 400)->nullable();
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
        Schema::dropIfExists('pcare_kunjungan_umum');
    }
}
