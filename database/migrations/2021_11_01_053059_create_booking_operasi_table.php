<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookingOperasiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('booking_operasi', function (Blueprint $table) {
            $table->string('no_rawat', 17)->nullable()->index('no_rawat');
            $table->string('kode_paket', 15)->nullable()->index('kode_paket');
            $table->date('tanggal')->nullable();
            $table->time('jam_mulai')->nullable();
            $table->time('jam_selesai')->nullable();
            $table->enum('status', ['Menunggu', 'Proses Operasi', 'Selesai'])->nullable();
            $table->string('kd_dokter', 20)->nullable()->index('kd_dokter');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('booking_operasi');
    }
}
