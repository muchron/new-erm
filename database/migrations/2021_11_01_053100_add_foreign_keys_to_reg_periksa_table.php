<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToRegPeriksaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('reg_periksa', function (Blueprint $table) {
            $table->foreign(['kd_poli'], 'reg_periksa_ibfk_3')->references(['kd_poli'])->on('poliklinik')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['kd_dokter'], 'reg_periksa_ibfk_4')->references(['kd_dokter'])->on('dokter')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['kd_pj'], 'reg_periksa_ibfk_6')->references(['kd_pj'])->on('penjab')->onUpdate('CASCADE');
            $table->foreign(['no_rkm_medis'], 'reg_periksa_ibfk_7')->references(['no_rkm_medis'])->on('pasien')->onUpdate('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('reg_periksa', function (Blueprint $table) {
            $table->dropForeign('reg_periksa_ibfk_3');
            $table->dropForeign('reg_periksa_ibfk_4');
            $table->dropForeign('reg_periksa_ibfk_6');
            $table->dropForeign('reg_periksa_ibfk_7');
        });
    }
}
