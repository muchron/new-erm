<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToDataTriaseIgddetailSkala4Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('data_triase_igddetail_skala4', function (Blueprint $table) {
            $table->foreign(['no_rawat'], 'data_triase_igddetail_skala4_ibfk_1')->references(['no_rawat'])->on('reg_periksa')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['kode_skala4'], 'data_triase_igddetail_skala4_ibfk_2')->references(['kode_skala4'])->on('master_triase_skala4')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('data_triase_igddetail_skala4', function (Blueprint $table) {
            $table->dropForeign('data_triase_igddetail_skala4_ibfk_1');
            $table->dropForeign('data_triase_igddetail_skala4_ibfk_2');
        });
    }
}
