<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToDataTriaseIgddetailSkala1Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('data_triase_igddetail_skala1', function (Blueprint $table) {
            $table->foreign(['kode_skala1'], 'data_triase_igddetail_skala1_ibfk_1')->references(['kode_skala1'])->on('master_triase_skala1')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['no_rawat'], 'data_triase_igddetail_skala1_ibfk_2')->references(['no_rawat'])->on('reg_periksa')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('data_triase_igddetail_skala1', function (Blueprint $table) {
            $table->dropForeign('data_triase_igddetail_skala1_ibfk_1');
            $table->dropForeign('data_triase_igddetail_skala1_ibfk_2');
        });
    }
}
