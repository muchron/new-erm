<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToPemeriksaanObstetriRalanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('pemeriksaan_obstetri_ralan', function (Blueprint $table) {
            $table->foreign(['no_rawat'], 'pemeriksaan_obstetri_ralan_ibfk_1')->references(['no_rawat'])->on('reg_periksa')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('pemeriksaan_obstetri_ralan', function (Blueprint $table) {
            $table->dropForeign('pemeriksaan_obstetri_ralan_ibfk_1');
        });
    }
}
