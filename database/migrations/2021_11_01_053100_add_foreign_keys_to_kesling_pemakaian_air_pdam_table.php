<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToKeslingPemakaianAirPdamTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('kesling_pemakaian_air_pdam', function (Blueprint $table) {
            $table->foreign(['nip'], 'kesling_pemakaian_air_pdam_ibfk_1')->references(['nip'])->on('petugas')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('kesling_pemakaian_air_pdam', function (Blueprint $table) {
            $table->dropForeign('kesling_pemakaian_air_pdam_ibfk_1');
        });
    }
}
