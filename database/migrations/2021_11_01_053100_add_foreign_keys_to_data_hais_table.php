<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToDataHaisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('data_hais', function (Blueprint $table) {
            $table->foreign(['no_rawat'], 'data_HAIs_ibfk_1')->references(['no_rawat'])->on('reg_periksa')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['kd_kamar'], 'data_HAIs_ibfk_2')->references(['kd_kamar'])->on('kamar')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('data_hais', function (Blueprint $table) {
            $table->dropForeign('data_HAIs_ibfk_1');
            $table->dropForeign('data_HAIs_ibfk_2');
        });
    }
}
