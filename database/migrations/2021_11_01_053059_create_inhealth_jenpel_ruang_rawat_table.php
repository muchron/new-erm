<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInhealthJenpelRuangRawatTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inhealth_jenpel_ruang_rawat', function (Blueprint $table) {
            $table->string('kd_kamar', 15)->primary();
            $table->string('kode_jenpel_ruang_rawat', 20);
            $table->string('nama_jenpel_ruang_rawat', 100)->nullable();
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
        Schema::dropIfExists('inhealth_jenpel_ruang_rawat');
    }
}
