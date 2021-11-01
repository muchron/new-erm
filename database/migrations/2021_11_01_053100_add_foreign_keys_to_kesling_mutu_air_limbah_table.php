<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToKeslingMutuAirLimbahTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('kesling_mutu_air_limbah', function (Blueprint $table) {
            $table->foreign(['nip'], 'kesling_mutu_air_limbah_ibfk_1')->references(['nip'])->on('petugas')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('kesling_mutu_air_limbah', function (Blueprint $table) {
            $table->dropForeign('kesling_mutu_air_limbah_ibfk_1');
        });
    }
}
