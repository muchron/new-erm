<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToPeriksaLabTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('periksa_lab', function (Blueprint $table) {
            $table->foreign(['nip'], 'periksa_lab_ibfk_10')->references(['nip'])->on('petugas')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['kd_jenis_prw'], 'periksa_lab_ibfk_11')->references(['kd_jenis_prw'])->on('jns_perawatan_lab')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['dokter_perujuk'], 'periksa_lab_ibfk_12')->references(['kd_dokter'])->on('dokter')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['kd_dokter'], 'periksa_lab_ibfk_13')->references(['kd_dokter'])->on('dokter')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['no_rawat'], 'periksa_lab_ibfk_9')->references(['no_rawat'])->on('reg_periksa')->onUpdate('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('periksa_lab', function (Blueprint $table) {
            $table->dropForeign('periksa_lab_ibfk_10');
            $table->dropForeign('periksa_lab_ibfk_11');
            $table->dropForeign('periksa_lab_ibfk_12');
            $table->dropForeign('periksa_lab_ibfk_13');
            $table->dropForeign('periksa_lab_ibfk_9');
        });
    }
}
