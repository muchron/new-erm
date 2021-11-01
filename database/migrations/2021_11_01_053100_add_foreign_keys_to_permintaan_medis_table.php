<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToPermintaanMedisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('permintaan_medis', function (Blueprint $table) {
            $table->foreign(['kd_bangsal'], 'permintaan_medis_ibfk_1')->references(['kd_bangsal'])->on('bangsal')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['nip'], 'permintaan_medis_ibfk_2')->references(['nik'])->on('pegawai')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['kd_bangsaltujuan'], 'permintaan_medis_ibfk_3')->references(['kd_bangsal'])->on('bangsal')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('permintaan_medis', function (Blueprint $table) {
            $table->dropForeign('permintaan_medis_ibfk_1');
            $table->dropForeign('permintaan_medis_ibfk_2');
            $table->dropForeign('permintaan_medis_ibfk_3');
        });
    }
}
