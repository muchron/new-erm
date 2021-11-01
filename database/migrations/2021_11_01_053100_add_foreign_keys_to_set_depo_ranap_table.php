<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToSetDepoRanapTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('set_depo_ranap', function (Blueprint $table) {
            $table->foreign(['kd_depo'], 'set_depo_ranap_ibfk_1')->references(['kd_bangsal'])->on('bangsal')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['kd_bangsal'], 'set_depo_ranap_ibfk_2')->references(['kd_bangsal'])->on('bangsal')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('set_depo_ranap', function (Blueprint $table) {
            $table->dropForeign('set_depo_ranap_ibfk_1');
            $table->dropForeign('set_depo_ranap_ibfk_2');
        });
    }
}
