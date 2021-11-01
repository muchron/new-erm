<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUbahPenjabTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ubah_penjab', function (Blueprint $table) {
            $table->string('no_rawat', 17)->index('no_rawat');
            $table->dateTime('tgl_ubah')->index('tgl_ubah');
            $table->char('kd_pj1', 3)->index('kd_pj1');
            $table->char('kd_pj2', 3)->index('kd_pj2');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ubah_penjab');
    }
}
