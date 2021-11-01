<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDataTriaseIgdTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_triase_igd', function (Blueprint $table) {
            $table->string('no_rawat', 17)->primary();
            $table->dateTime('tgl_kunjungan');
            $table->enum('cara_masuk', ['Jalan', 'Brankar', 'Kursi Roda', 'Digendong']);
            $table->enum('alat_transportasi', ['-', 'AGD', 'Sendiri', 'Swasta']);
            $table->enum('alasan_kedatangan', ['Datang Sendiri', 'Polisi', 'Rujukan', '-']);
            $table->string('keterangan_kedatangan', 100);
            $table->string('kode_kasus', 3)->index('kode_kasus');
            $table->string('tekanan_darah', 8);
            $table->string('nadi', 3);
            $table->string('pernapasan', 3);
            $table->string('suhu', 5);
            $table->string('saturasi_o2', 3);
            $table->string('nyeri', 5);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('data_triase_igd');
    }
}
