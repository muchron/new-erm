<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToBookingPeriksaBalasanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('booking_periksa_balasan', function (Blueprint $table) {
            $table->foreign(['no_booking'], 'booking_periksa_balasan_ibfk_1')->references(['no_booking'])->on('booking_periksa')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('booking_periksa_balasan', function (Blueprint $table) {
            $table->dropForeign('booking_periksa_balasan_ibfk_1');
        });
    }
}
