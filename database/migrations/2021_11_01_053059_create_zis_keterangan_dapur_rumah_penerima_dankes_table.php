<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateZisKeteranganDapurRumahPenerimaDankesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('zis_keterangan_dapur_rumah_penerima_dankes', function (Blueprint $table) {
            $table->char('kode', 3)->primary();
            $table->string('keterangan', 40)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('zis_keterangan_dapur_rumah_penerima_dankes');
    }
}
