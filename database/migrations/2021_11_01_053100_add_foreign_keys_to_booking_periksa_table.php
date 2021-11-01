<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToBookingPeriksaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('booking_periksa', function (Blueprint $table) {
            $table->foreign(['kd_poli'], 'booking_periksa_ibfk_1')->references(['kd_poli'])->on('poliklinik')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('booking_periksa', function (Blueprint $table) {
            $table->dropForeign('booking_periksa_ibfk_1');
        });
    }
}
