<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToBookingRegistrasiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('booking_registrasi', function (Blueprint $table) {
            $table->foreign(['kd_dokter'], 'booking_registrasi_ibfk_1')->references(['kd_dokter'])->on('dokter')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['kd_poli'], 'booking_registrasi_ibfk_2')->references(['kd_poli'])->on('poliklinik')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['kd_pj'], 'booking_registrasi_ibfk_3')->references(['kd_pj'])->on('penjab')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['no_rkm_medis'], 'booking_registrasi_ibfk_4')->references(['no_rkm_medis'])->on('pasien')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('booking_registrasi', function (Blueprint $table) {
            $table->dropForeign('booking_registrasi_ibfk_1');
            $table->dropForeign('booking_registrasi_ibfk_2');
            $table->dropForeign('booking_registrasi_ibfk_3');
            $table->dropForeign('booking_registrasi_ibfk_4');
        });
    }
}
