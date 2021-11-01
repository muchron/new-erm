<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePencapaianKinerjaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pencapaian_kinerja', function (Blueprint $table) {
            $table->string('kode_pencapaian', 3)->primary();
            $table->string('nama_pencapaian', 200)->nullable();
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
        Schema::dropIfExists('pencapaian_kinerja');
    }
}
