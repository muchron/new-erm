<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePemeriksaanGinekologiRalanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pemeriksaan_ginekologi_ralan', function (Blueprint $table) {
            $table->string('no_rawat', 17);
            $table->date('tgl_perawatan');
            $table->time('jam_rawat');
            $table->string('inspeksi', 50)->nullable();
            $table->string('inspeksi_vulva', 50)->nullable();
            $table->string('inspekulo_gine', 50)->nullable();
            $table->enum('fluxus_gine', ['+', '-'])->nullable();
            $table->enum('fluor_gine', ['+', '-'])->nullable();
            $table->string('vulva_inspekulo', 50);
            $table->string('portio_inspekulo', 50)->nullable();
            $table->string('sondage', 50)->nullable();
            $table->string('portio_dalam', 50)->nullable();
            $table->string('bentuk', 50)->nullable();
            $table->string('cavum_uteri', 50)->nullable();
            $table->enum('mobilitas', ['+', '-'])->nullable();
            $table->string('ukuran', 50)->nullable();
            $table->enum('nyeri_tekan', ['+', '-'])->nullable();
            $table->string('adnexa_kanan', 50)->nullable();
            $table->string('adnexa_kiri', 50);
            $table->string('cavum_douglas', 50);

            $table->primary(['no_rawat', 'tgl_perawatan', 'jam_rawat']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pemeriksaan_ginekologi_ralan');
    }
}
