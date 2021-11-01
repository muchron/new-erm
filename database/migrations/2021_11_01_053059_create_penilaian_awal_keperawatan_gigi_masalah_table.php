<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePenilaianAwalKeperawatanGigiMasalahTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('penilaian_awal_keperawatan_gigi_masalah', function (Blueprint $table) {
            $table->string('no_rawat', 17);
            $table->string('kode_masalah', 3)->index('kode_masalah');

            $table->primary(['no_rawat', 'kode_masalah']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('penilaian_awal_keperawatan_gigi_masalah');
    }
}
