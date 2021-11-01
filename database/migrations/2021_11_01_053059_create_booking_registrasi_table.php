<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookingRegistrasiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('booking_registrasi', function (Blueprint $table) {
            $table->date('tanggal_booking')->nullable();
            $table->time('jam_booking')->nullable();
            $table->string('no_rkm_medis', 15)->index('no_rkm_medis');
            $table->date('tanggal_periksa');
            $table->string('kd_dokter', 20)->nullable()->index('kd_dokter');
            $table->string('kd_poli', 5)->nullable()->index('kd_poli');
            $table->string('no_reg', 8)->nullable();
            $table->char('kd_pj', 3)->nullable()->index('kd_pj');
            $table->integer('limit_reg')->nullable();
            $table->dateTime('waktu_kunjungan')->nullable();
            $table->enum('status', ['Terdaftar', 'Belum', 'Batal', 'Dokter Berhalangan'])->nullable();

            $table->primary(['no_rkm_medis', 'tanggal_periksa']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('booking_registrasi');
    }
}
