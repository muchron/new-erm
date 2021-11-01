<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToBookingOperasiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('booking_operasi', function (Blueprint $table) {
            $table->foreign(['no_rawat'], 'booking_operasi_ibfk_1')->references(['no_rawat'])->on('reg_periksa')->onUpdate('CASCADE');
            $table->foreign(['kode_paket'], 'booking_operasi_ibfk_2')->references(['kode_paket'])->on('paket_operasi')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['kd_dokter'], 'booking_operasi_ibfk_3')->references(['kd_dokter'])->on('dokter')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('booking_operasi', function (Blueprint $table) {
            $table->dropForeign('booking_operasi_ibfk_1');
            $table->dropForeign('booking_operasi_ibfk_2');
            $table->dropForeign('booking_operasi_ibfk_3');
        });
    }
}
