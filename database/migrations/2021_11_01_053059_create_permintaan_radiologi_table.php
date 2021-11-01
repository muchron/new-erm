<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePermintaanRadiologiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('permintaan_radiologi', function (Blueprint $table) {
            $table->string('noorder', 15)->primary();
            $table->string('no_rawat', 17)->index('no_rawat');
            $table->date('tgl_permintaan');
            $table->time('jam_permintaan');
            $table->date('tgl_sampel');
            $table->time('jam_sampel');
            $table->date('tgl_hasil');
            $table->time('jam_hasil');
            $table->string('dokter_perujuk', 20)->index('dokter_perujuk');
            $table->enum('status', ['ralan', 'ranap']);
            $table->string('informasi_tambahan', 60);
            $table->string('diagnosa_klinis', 80);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('permintaan_radiologi');
    }
}
