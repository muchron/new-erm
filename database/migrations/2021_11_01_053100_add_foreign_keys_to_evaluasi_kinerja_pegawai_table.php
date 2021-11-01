<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToEvaluasiKinerjaPegawaiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('evaluasi_kinerja_pegawai', function (Blueprint $table) {
            $table->foreign(['id'], 'evaluasi_kinerja_pegawai_ibfk_1')->references(['id'])->on('pegawai')->onUpdate('CASCADE');
            $table->foreign(['kode_evaluasi'], 'evaluasi_kinerja_pegawai_ibfk_2')->references(['kode_evaluasi'])->on('evaluasi_kinerja')->onUpdate('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('evaluasi_kinerja_pegawai', function (Blueprint $table) {
            $table->dropForeign('evaluasi_kinerja_pegawai_ibfk_1');
            $table->dropForeign('evaluasi_kinerja_pegawai_ibfk_2');
        });
    }
}
