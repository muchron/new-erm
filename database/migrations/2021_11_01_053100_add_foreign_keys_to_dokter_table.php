<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToDokterTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('dokter', function (Blueprint $table) {
            $table->foreign(['kd_sps'], 'dokter_ibfk_2')->references(['kd_sps'])->on('spesialis')->onUpdate('CASCADE');
            $table->foreign(['kd_dokter'], 'dokter_ibfk_3')->references(['nik'])->on('pegawai')->onUpdate('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('dokter', function (Blueprint $table) {
            $table->dropForeign('dokter_ibfk_2');
            $table->dropForeign('dokter_ibfk_3');
        });
    }
}
