<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGambarRadiologiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gambar_radiologi', function (Blueprint $table) {
            $table->string('no_rawat', 17);
            $table->date('tgl_periksa');
            $table->time('jam');
            $table->string('lokasi_gambar', 500);

            $table->primary(['no_rawat', 'tgl_periksa', 'jam', 'lokasi_gambar']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('gambar_radiologi');
    }
}
