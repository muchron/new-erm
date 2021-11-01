<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBiayaHarianTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('biaya_harian', function (Blueprint $table) {
            $table->string('kd_kamar', 15);
            $table->string('nama_biaya', 50);
            $table->double('besar_biaya')->index('besar_biaya');
            $table->integer('jml')->index('jml');

            $table->primary(['kd_kamar', 'nama_biaya']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('biaya_harian');
    }
}
