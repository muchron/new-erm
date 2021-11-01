<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToK3rsPeristiwaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('k3rs_peristiwa', function (Blueprint $table) {
            $table->foreign(['kode_cidera'], 'k3rs_peristiwa_ibfk_1')->references(['kode_cidera'])->on('k3rs_jenis_cidera')->onUpdate('CASCADE');
            $table->foreign(['kode_bagian'], 'k3rs_peristiwa_ibfk_10')->references(['kode_bagian'])->on('k3rs_bagian_tubuh')->onUpdate('CASCADE');
            $table->foreign(['kode_dampak'], 'k3rs_peristiwa_ibfk_2')->references(['kode_dampak'])->on('k3rs_dampak_cidera')->onUpdate('CASCADE');
            $table->foreign(['kode_lokasi'], 'k3rs_peristiwa_ibfk_3')->references(['kode_lokasi'])->on('k3rs_lokasi_kejadian')->onUpdate('CASCADE');
            $table->foreign(['kode_luka'], 'k3rs_peristiwa_ibfk_4')->references(['kode_luka'])->on('k3rs_jenis_luka')->onUpdate('CASCADE');
            $table->foreign(['kode_pekerjaan'], 'k3rs_peristiwa_ibfk_5')->references(['kode_pekerjaan'])->on('k3rs_jenis_pekerjaan')->onUpdate('CASCADE');
            $table->foreign(['kode_penyebab'], 'k3rs_peristiwa_ibfk_6')->references(['kode_penyebab'])->on('k3rs_penyebab')->onUpdate('CASCADE');
            $table->foreign(['nik'], 'k3rs_peristiwa_ibfk_7')->references(['nik'])->on('pegawai')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['nik_pelapor'], 'k3rs_peristiwa_ibfk_8')->references(['nik'])->on('pegawai')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['nik_timk3'], 'k3rs_peristiwa_ibfk_9')->references(['nik'])->on('pegawai')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('k3rs_peristiwa', function (Blueprint $table) {
            $table->dropForeign('k3rs_peristiwa_ibfk_1');
            $table->dropForeign('k3rs_peristiwa_ibfk_10');
            $table->dropForeign('k3rs_peristiwa_ibfk_2');
            $table->dropForeign('k3rs_peristiwa_ibfk_3');
            $table->dropForeign('k3rs_peristiwa_ibfk_4');
            $table->dropForeign('k3rs_peristiwa_ibfk_5');
            $table->dropForeign('k3rs_peristiwa_ibfk_6');
            $table->dropForeign('k3rs_peristiwa_ibfk_7');
            $table->dropForeign('k3rs_peristiwa_ibfk_8');
            $table->dropForeign('k3rs_peristiwa_ibfk_9');
        });
    }
}
