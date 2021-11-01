<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToPasienTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('pasien', function (Blueprint $table) {
            $table->foreign(['kd_pj'], 'pasien_ibfk_1')->references(['kd_pj'])->on('penjab')->onUpdate('CASCADE');
            $table->foreign(['kd_kel'], 'pasien_ibfk_2')->references(['kd_kel'])->on('kelurahan')->onUpdate('CASCADE');
            $table->foreign(['kd_kec'], 'pasien_ibfk_3')->references(['kd_kec'])->on('kecamatan')->onUpdate('CASCADE');
            $table->foreign(['kd_kab'], 'pasien_ibfk_4')->references(['kd_kab'])->on('kabupaten')->onUpdate('CASCADE');
            $table->foreign(['perusahaan_pasien'], 'pasien_ibfk_5')->references(['kode_perusahaan'])->on('perusahaan_pasien')->onUpdate('CASCADE');
            $table->foreign(['suku_bangsa'], 'pasien_ibfk_6')->references(['id'])->on('suku_bangsa')->onUpdate('CASCADE');
            $table->foreign(['bahasa_pasien'], 'pasien_ibfk_7')->references(['id'])->on('bahasa_pasien')->onUpdate('CASCADE');
            $table->foreign(['cacat_fisik'], 'pasien_ibfk_8')->references(['id'])->on('cacat_fisik')->onUpdate('CASCADE');
            $table->foreign(['kd_prop'], 'pasien_ibfk_9')->references(['kd_prop'])->on('propinsi')->onUpdate('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('pasien', function (Blueprint $table) {
            $table->dropForeign('pasien_ibfk_1');
            $table->dropForeign('pasien_ibfk_2');
            $table->dropForeign('pasien_ibfk_3');
            $table->dropForeign('pasien_ibfk_4');
            $table->dropForeign('pasien_ibfk_5');
            $table->dropForeign('pasien_ibfk_6');
            $table->dropForeign('pasien_ibfk_7');
            $table->dropForeign('pasien_ibfk_8');
            $table->dropForeign('pasien_ibfk_9');
        });
    }
}
