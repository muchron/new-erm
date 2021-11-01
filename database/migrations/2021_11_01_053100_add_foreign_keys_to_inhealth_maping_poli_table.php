<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToInhealthMapingPoliTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('inhealth_maping_poli', function (Blueprint $table) {
            $table->foreign(['kd_poli_rs'], 'inhealth_maping_poli_ibfk_1')->references(['kd_poli'])->on('poliklinik')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('inhealth_maping_poli', function (Blueprint $table) {
            $table->dropForeign('inhealth_maping_poli_ibfk_1');
        });
    }
}
