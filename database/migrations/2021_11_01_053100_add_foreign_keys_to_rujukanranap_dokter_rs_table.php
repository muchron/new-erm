<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToRujukanranapDokterRsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('rujukanranap_dokter_rs', function (Blueprint $table) {
            $table->foreign(['kd_dokter'], 'rujukanranap_dokter_rs_ibfk_1')->references(['kd_dokter'])->on('dokter')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['no_rkm_medis'], 'rujukanranap_dokter_rs_ibfk_2')->references(['no_rkm_medis'])->on('pasien')->onUpdate('CASCADE');
            $table->foreign(['kd_kamar'], 'rujukanranap_dokter_rs_ibfk_3')->references(['kd_kamar'])->on('kamar')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('rujukanranap_dokter_rs', function (Blueprint $table) {
            $table->dropForeign('rujukanranap_dokter_rs_ibfk_1');
            $table->dropForeign('rujukanranap_dokter_rs_ibfk_2');
            $table->dropForeign('rujukanranap_dokter_rs_ibfk_3');
        });
    }
}
