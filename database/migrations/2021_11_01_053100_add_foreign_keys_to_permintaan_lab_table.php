<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToPermintaanLabTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('permintaan_lab', function (Blueprint $table) {
            $table->foreign(['dokter_perujuk'], 'permintaan_lab_ibfk_2')->references(['kd_dokter'])->on('dokter')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['no_rawat'], 'permintaan_lab_ibfk_3')->references(['no_rawat'])->on('reg_periksa')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('permintaan_lab', function (Blueprint $table) {
            $table->dropForeign('permintaan_lab_ibfk_2');
            $table->dropForeign('permintaan_lab_ibfk_3');
        });
    }
}
