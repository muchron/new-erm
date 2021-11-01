<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJadwalTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jadwal', function (Blueprint $table) {
            $table->string('kd_dokter', 20)->index('kd_dokter');
            $table->enum('hari_kerja', ['SENIN', 'SELASA', 'RABU', 'KAMIS', 'JUMAT', 'SABTU', 'AKHAD'])->default('SENIN');
            $table->time('jam_mulai')->default('00:00:00')->index('jam_mulai');
            $table->time('jam_selesai')->nullable()->index('jam_selesai');
            $table->char('kd_poli', 5)->nullable()->index('kd_poli');
            $table->integer('kuota')->nullable();

            $table->primary(['kd_dokter', 'hari_kerja', 'jam_mulai']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jadwal');
    }
}
