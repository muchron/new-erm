<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateResikoKerjaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('resiko_kerja', function (Blueprint $table) {
            $table->string('kode_resiko', 3)->primary();
            $table->string('nama_resiko', 200)->nullable();
            $table->tinyInteger('indek')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('resiko_kerja');
    }
}
