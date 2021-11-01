<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePeriksaRadiologiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('periksa_radiologi', function (Blueprint $table) {
            $table->string('no_rawat', 17);
            $table->string('nip', 20)->index('nip');
            $table->string('kd_jenis_prw', 15)->index('kd_jenis_prw');
            $table->date('tgl_periksa');
            $table->time('jam');
            $table->string('dokter_perujuk', 20)->index('dokter_perujuk');
            $table->double('bagian_rs');
            $table->double('bhp');
            $table->double('tarif_perujuk');
            $table->double('tarif_tindakan_dokter');
            $table->double('tarif_tindakan_petugas');
            $table->double('kso')->nullable();
            $table->double('menejemen')->nullable();
            $table->double('biaya');
            $table->string('kd_dokter', 20)->index('kd_dokter');
            $table->enum('status', ['Ranap', 'Ralan'])->nullable();
            $table->string('proyeksi', 50);
            $table->string('kV', 10);
            $table->string('mAS', 10);
            $table->string('FFD', 10);
            $table->string('BSF', 10);
            $table->string('inak', 10);
            $table->string('jml_penyinaran', 10);
            $table->string('dosis', 20);

            $table->primary(['no_rawat', 'kd_jenis_prw', 'tgl_periksa', 'jam']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('periksa_radiologi');
    }
}
