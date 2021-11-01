<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLaporanOperasiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('laporan_operasi', function (Blueprint $table) {
            $table->string('no_rawat', 17);
            $table->dateTime('tanggal');
            $table->string('diagnosa_preop', 100);
            $table->string('diagnosa_postop', 100);
            $table->string('jaringan_dieksekusi', 100);
            $table->dateTime('selesaioperasi');
            $table->enum('permintaan_pa', ['Ya', 'Tidak']);
            $table->text('laporan_operasi');

            $table->primary(['no_rawat', 'tanggal']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('laporan_operasi');
    }
}
