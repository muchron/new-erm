<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToUtdPendonorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('utd_pendonor', function (Blueprint $table) {
            $table->foreign(['kd_kel'], 'utd_pendonor_ibfk_1')->references(['kd_kel'])->on('kelurahan')->onUpdate('CASCADE');
            $table->foreign(['kd_kec'], 'utd_pendonor_ibfk_2')->references(['kd_kec'])->on('kecamatan')->onUpdate('CASCADE');
            $table->foreign(['kd_kab'], 'utd_pendonor_ibfk_3')->references(['kd_kab'])->on('kabupaten')->onUpdate('CASCADE');
            $table->foreign(['kd_prop'], 'utd_pendonor_ibfk_4')->references(['kd_prop'])->on('propinsi')->onUpdate('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('utd_pendonor', function (Blueprint $table) {
            $table->dropForeign('utd_pendonor_ibfk_1');
            $table->dropForeign('utd_pendonor_ibfk_2');
            $table->dropForeign('utd_pendonor_ibfk_3');
            $table->dropForeign('utd_pendonor_ibfk_4');
        });
    }
}
