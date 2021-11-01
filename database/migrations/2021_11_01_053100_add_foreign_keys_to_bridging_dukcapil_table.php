<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToBridgingDukcapilTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('bridging_dukcapil', function (Blueprint $table) {
            $table->foreign(['no_rkm_medis'], 'bridging_dukcapil_ibfk_1')->references(['no_rkm_medis'])->on('pasien')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('bridging_dukcapil', function (Blueprint $table) {
            $table->dropForeign('bridging_dukcapil_ibfk_1');
        });
    }
}
