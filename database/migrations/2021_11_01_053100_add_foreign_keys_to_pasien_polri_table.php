<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToPasienPolriTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('pasien_polri', function (Blueprint $table) {
            $table->foreign(['no_rkm_medis'], 'pasien_polri_ibfk_1')->references(['no_rkm_medis'])->on('pasien')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['golongan_polri'], 'pasien_polri_ibfk_2')->references(['id'])->on('golongan_polri')->onUpdate('CASCADE');
            $table->foreign(['pangkat_polri'], 'pasien_polri_ibfk_3')->references(['id'])->on('pangkat_polri')->onUpdate('CASCADE');
            $table->foreign(['satuan_polri'], 'pasien_polri_ibfk_4')->references(['id'])->on('satuan_polri')->onUpdate('CASCADE');
            $table->foreign(['jabatan_polri'], 'pasien_polri_ibfk_5')->references(['id'])->on('jabatan_polri')->onUpdate('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('pasien_polri', function (Blueprint $table) {
            $table->dropForeign('pasien_polri_ibfk_1');
            $table->dropForeign('pasien_polri_ibfk_2');
            $table->dropForeign('pasien_polri_ibfk_3');
            $table->dropForeign('pasien_polri_ibfk_4');
            $table->dropForeign('pasien_polri_ibfk_5');
        });
    }
}
