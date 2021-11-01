<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToPencapaianKinerjaPegawaiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('pencapaian_kinerja_pegawai', function (Blueprint $table) {
            $table->foreign(['id'], 'pencapaian_kinerja_pegawai_ibfk_1')->references(['id'])->on('pegawai')->onUpdate('CASCADE');
            $table->foreign(['kode_pencapaian'], 'pencapaian_kinerja_pegawai_ibfk_2')->references(['kode_pencapaian'])->on('pencapaian_kinerja')->onUpdate('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('pencapaian_kinerja_pegawai', function (Blueprint $table) {
            $table->dropForeign('pencapaian_kinerja_pegawai_ibfk_1');
            $table->dropForeign('pencapaian_kinerja_pegawai_ibfk_2');
        });
    }
}
