<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToRanapGabungTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('ranap_gabung', function (Blueprint $table) {
            $table->foreign(['no_rawat'], 'ranap_gabung_ibfk_1')->references(['no_rawat'])->on('reg_periksa')->onUpdate('CASCADE');
            $table->foreign(['no_rawat2'], 'ranap_gabung_ibfk_2')->references(['no_rawat'])->on('reg_periksa')->onUpdate('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('ranap_gabung', function (Blueprint $table) {
            $table->dropForeign('ranap_gabung_ibfk_1');
            $table->dropForeign('ranap_gabung_ibfk_2');
        });
    }
}
