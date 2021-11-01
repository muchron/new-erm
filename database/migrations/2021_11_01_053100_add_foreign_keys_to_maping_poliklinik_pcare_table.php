<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToMapingPoliklinikPcareTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('maping_poliklinik_pcare', function (Blueprint $table) {
            $table->foreign(['kd_poli_rs'], 'maping_poliklinik_pcare_ibfk_1')->references(['kd_poli'])->on('poliklinik')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('maping_poliklinik_pcare', function (Blueprint $table) {
            $table->dropForeign('maping_poliklinik_pcare_ibfk_1');
        });
    }
}
