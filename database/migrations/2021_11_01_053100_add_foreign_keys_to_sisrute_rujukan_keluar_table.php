<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToSisruteRujukanKeluarTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('sisrute_rujukan_keluar', function (Blueprint $table) {
            $table->foreign(['no_rawat'], 'sisrute_rujukan_keluar_ibfk_1')->references(['no_rawat'])->on('reg_periksa')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('sisrute_rujukan_keluar', function (Blueprint $table) {
            $table->dropForeign('sisrute_rujukan_keluar_ibfk_1');
        });
    }
}
