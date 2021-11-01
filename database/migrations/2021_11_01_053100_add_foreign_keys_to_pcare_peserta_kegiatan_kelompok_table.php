<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToPcarePesertaKegiatanKelompokTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('pcare_peserta_kegiatan_kelompok', function (Blueprint $table) {
            $table->foreign(['eduId'], 'pcare_peserta_kegiatan_kelompok_ibfk_1')->references(['eduId'])->on('pcare_kegiatan_kelompok')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['no_rkm_medis'], 'pcare_peserta_kegiatan_kelompok_ibfk_2')->references(['no_rkm_medis'])->on('pasien')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('pcare_peserta_kegiatan_kelompok', function (Blueprint $table) {
            $table->dropForeign('pcare_peserta_kegiatan_kelompok_ibfk_1');
            $table->dropForeign('pcare_peserta_kegiatan_kelompok_ibfk_2');
        });
    }
}
