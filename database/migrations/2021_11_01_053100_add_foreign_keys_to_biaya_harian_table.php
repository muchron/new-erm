<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToBiayaHarianTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('biaya_harian', function (Blueprint $table) {
            $table->foreign(['kd_kamar'], 'biaya_harian_ibfk_1')->references(['kd_kamar'])->on('kamar')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('biaya_harian', function (Blueprint $table) {
            $table->dropForeign('biaya_harian_ibfk_1');
        });
    }
}
