<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToPeminjamanBerkasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('peminjaman_berkas', function (Blueprint $table) {
            $table->foreign(['no_rkm_medis'], 'peminjaman_berkas_ibfk_1')->references(['no_rkm_medis'])->on('pasien')->onUpdate('CASCADE');
            $table->foreign(['nip'], 'peminjaman_berkas_ibfk_2')->references(['nip'])->on('petugas')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['id_ruang'], 'peminjaman_berkas_ibfk_3')->references(['id_ruang'])->on('inventaris_ruang')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('peminjaman_berkas', function (Blueprint $table) {
            $table->dropForeign('peminjaman_berkas_ibfk_1');
            $table->dropForeign('peminjaman_berkas_ibfk_2');
            $table->dropForeign('peminjaman_berkas_ibfk_3');
        });
    }
}
