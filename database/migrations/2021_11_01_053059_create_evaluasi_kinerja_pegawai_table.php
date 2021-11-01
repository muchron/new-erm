<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEvaluasiKinerjaPegawaiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('evaluasi_kinerja_pegawai', function (Blueprint $table) {
            $table->integer('id');
            $table->string('kode_evaluasi', 3)->index('kode_evaluasi');
            $table->year('tahun');
            $table->tinyInteger('bulan');
            $table->string('keterangan', 150)->nullable();

            $table->primary(['id', 'kode_evaluasi', 'tahun', 'bulan']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('evaluasi_kinerja_pegawai');
    }
}
