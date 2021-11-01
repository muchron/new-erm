<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookingPeriksaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('booking_periksa', function (Blueprint $table) {
            $table->string('no_booking', 17)->primary();
            $table->date('tanggal')->nullable();
            $table->string('nama', 40)->nullable();
            $table->string('alamat', 200)->nullable();
            $table->string('no_telp', 40)->nullable();
            $table->string('email', 50)->nullable();
            $table->string('kd_poli', 5)->nullable()->index('kd_poli');
            $table->string('tambahan_pesan', 400)->nullable();
            $table->enum('status', ['Diterima', 'Ditolak', 'Belum Dibalas']);
            $table->dateTime('tanggal_booking');

            $table->unique(['tanggal', 'no_telp'], 'tanggal');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('booking_periksa');
    }
}
