<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToPermintaanRadiologiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('permintaan_radiologi', function (Blueprint $table) {
            $table->foreign(['no_rawat'], 'permintaan_radiologi_ibfk_1')->references(['no_rawat'])->on('reg_periksa')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['dokter_perujuk'], 'permintaan_radiologi_ibfk_3')->references(['kd_dokter'])->on('dokter')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('permintaan_radiologi', function (Blueprint $table) {
            $table->dropForeign('permintaan_radiologi_ibfk_1');
            $table->dropForeign('permintaan_radiologi_ibfk_3');
        });
    }
}
