<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDataTriaseIgdprimerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_triase_igdprimer', function (Blueprint $table) {
            $table->string('no_rawat', 17)->primary();
            $table->string('keluhan_utama', 400);
            $table->enum('kebutuhan_khusus', ['-', 'UPPA', 'Airborne', 'Dekontaminan']);
            $table->string('catatan', 100);
            $table->enum('plan', ['Ruang Resusitasi', 'Ruang Kritis']);
            $table->dateTime('tanggaltriase');
            $table->string('kd_dokter', 20)->index('nip');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('data_triase_igdprimer');
    }
}
