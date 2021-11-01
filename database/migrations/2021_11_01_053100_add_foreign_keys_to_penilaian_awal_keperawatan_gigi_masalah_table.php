<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToPenilaianAwalKeperawatanGigiMasalahTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('penilaian_awal_keperawatan_gigi_masalah', function (Blueprint $table) {
            $table->foreign(['no_rawat'], 'penilaian_awal_keperawatan_gigi_masalah_ibfk_1')->references(['no_rawat'])->on('reg_periksa')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['kode_masalah'], 'penilaian_awal_keperawatan_gigi_masalah_ibfk_2')->references(['kode_masalah'])->on('master_masalah_keperawatan_gigi')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('penilaian_awal_keperawatan_gigi_masalah', function (Blueprint $table) {
            $table->dropForeign('penilaian_awal_keperawatan_gigi_masalah_ibfk_1');
            $table->dropForeign('penilaian_awal_keperawatan_gigi_masalah_ibfk_2');
        });
    }
}
