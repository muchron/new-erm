<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToInhealthJenpelRuangRawatTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('inhealth_jenpel_ruang_rawat', function (Blueprint $table) {
            $table->foreign(['kd_kamar'], 'inhealth_jenpel_ruang_rawat_ibfk_1')->references(['kd_kamar'])->on('kamar')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('inhealth_jenpel_ruang_rawat', function (Blueprint $table) {
            $table->dropForeign('inhealth_jenpel_ruang_rawat_ibfk_1');
        });
    }
}
