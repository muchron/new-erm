<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToObatRacikanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('obat_racikan', function (Blueprint $table) {
            $table->foreign(['no_rawat'], 'obat_racikan_ibfk_1')->references(['no_rawat'])->on('reg_periksa')->onUpdate('CASCADE');
            $table->foreign(['kd_racik'], 'obat_racikan_ibfk_2')->references(['kd_racik'])->on('metode_racik')->onUpdate('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('obat_racikan', function (Blueprint $table) {
            $table->dropForeign('obat_racikan_ibfk_1');
            $table->dropForeign('obat_racikan_ibfk_2');
        });
    }
}
