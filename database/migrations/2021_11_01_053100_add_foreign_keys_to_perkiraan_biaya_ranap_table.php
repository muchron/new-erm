<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToPerkiraanBiayaRanapTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('perkiraan_biaya_ranap', function (Blueprint $table) {
            $table->foreign(['no_rawat'], 'perkiraan_biaya_ranap_ibfk_1')->references(['no_rawat'])->on('reg_periksa')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['kd_penyakit'], 'perkiraan_biaya_ranap_ibfk_2')->references(['kd_penyakit'])->on('penyakit')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('perkiraan_biaya_ranap', function (Blueprint $table) {
            $table->dropForeign('perkiraan_biaya_ranap_ibfk_1');
            $table->dropForeign('perkiraan_biaya_ranap_ibfk_2');
        });
    }
}
