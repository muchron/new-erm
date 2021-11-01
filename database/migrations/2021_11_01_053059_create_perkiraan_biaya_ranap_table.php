<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePerkiraanBiayaRanapTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('perkiraan_biaya_ranap', function (Blueprint $table) {
            $table->string('no_rawat', 17)->primary();
            $table->string('kd_penyakit', 10)->index('kd_penyakit');
            $table->double('tarif');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('perkiraan_biaya_ranap');
    }
}
