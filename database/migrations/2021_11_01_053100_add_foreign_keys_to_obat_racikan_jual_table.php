<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToObatRacikanJualTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('obat_racikan_jual', function (Blueprint $table) {
            $table->foreign(['nota_jual'], 'obat_racikan_jual_ibfk_1')->references(['nota_jual'])->on('penjualan')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['kd_racik'], 'obat_racikan_jual_ibfk_2')->references(['kd_racik'])->on('metode_racik')->onUpdate('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('obat_racikan_jual', function (Blueprint $table) {
            $table->dropForeign('obat_racikan_jual_ibfk_1');
            $table->dropForeign('obat_racikan_jual_ibfk_2');
        });
    }
}
