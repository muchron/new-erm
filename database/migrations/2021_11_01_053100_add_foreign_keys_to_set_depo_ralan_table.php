<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToSetDepoRalanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('set_depo_ralan', function (Blueprint $table) {
            $table->foreign(['kd_poli'], 'set_depo_ralan_ibfk_1')->references(['kd_poli'])->on('poliklinik')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['kd_bangsal'], 'set_depo_ralan_ibfk_2')->references(['kd_bangsal'])->on('bangsal')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('set_depo_ralan', function (Blueprint $table) {
            $table->dropForeign('set_depo_ralan_ibfk_1');
            $table->dropForeign('set_depo_ralan_ibfk_2');
        });
    }
}
