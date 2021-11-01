<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePemeriksaanRalanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pemeriksaan_ralan', function (Blueprint $table) {
            $table->string('no_rawat', 17)->index('no_rawat');
            $table->date('tgl_perawatan');
            $table->time('jam_rawat');
            $table->char('suhu_tubuh', 5)->nullable();
            $table->char('tensi', 8);
            $table->char('nadi', 3)->nullable();
            $table->char('respirasi', 3)->nullable();
            $table->char('tinggi', 5)->nullable();
            $table->char('berat', 5)->nullable();
            $table->string('gcs', 10)->nullable();
            $table->enum('kesadaran', ['Compos Mentis', 'Somnolence', 'Sopor', 'Coma']);
            $table->string('keluhan', 400)->nullable();
            $table->string('pemeriksaan', 400)->nullable();
            $table->string('alergi', 50)->nullable();
            $table->enum('imun_ke', ['-', '1', '2', '3', '4', '5', '6', '7', '8', '10', '11', '12', '13'])->nullable();
            $table->string('rtl', 400);
            $table->string('penilaian', 400);

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
        Schema::dropIfExists('pemeriksaan_ralan');
    }
}
