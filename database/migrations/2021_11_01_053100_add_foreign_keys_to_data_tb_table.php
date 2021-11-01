<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToDataTbTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('data_tb', function (Blueprint $table) {
            $table->foreign(['no_rawat'], 'data_tb_ibfk_1')->references(['no_rawat'])->on('reg_periksa')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['kode_icd_x'], 'data_tb_ibfk_2')->references(['kd_penyakit'])->on('penyakit')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('data_tb', function (Blueprint $table) {
            $table->dropForeign('data_tb_ibfk_1');
            $table->dropForeign('data_tb_ibfk_2');
        });
    }
}
