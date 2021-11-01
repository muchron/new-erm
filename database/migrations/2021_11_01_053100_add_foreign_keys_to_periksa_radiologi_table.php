<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToPeriksaRadiologiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('periksa_radiologi', function (Blueprint $table) {
            $table->foreign(['no_rawat'], 'periksa_radiologi_ibfk_4')->references(['no_rawat'])->on('reg_periksa')->onUpdate('CASCADE');
            $table->foreign(['nip'], 'periksa_radiologi_ibfk_5')->references(['nip'])->on('petugas')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['kd_jenis_prw'], 'periksa_radiologi_ibfk_6')->references(['kd_jenis_prw'])->on('jns_perawatan_radiologi')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['kd_dokter'], 'periksa_radiologi_ibfk_7')->references(['kd_dokter'])->on('dokter')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['dokter_perujuk'], 'periksa_radiologi_ibfk_8')->references(['kd_dokter'])->on('dokter')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('periksa_radiologi', function (Blueprint $table) {
            $table->dropForeign('periksa_radiologi_ibfk_4');
            $table->dropForeign('periksa_radiologi_ibfk_5');
            $table->dropForeign('periksa_radiologi_ibfk_6');
            $table->dropForeign('periksa_radiologi_ibfk_7');
            $table->dropForeign('periksa_radiologi_ibfk_8');
        });
    }
}
