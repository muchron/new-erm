<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRujukanranapDokterRsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rujukanranap_dokter_rs', function (Blueprint $table) {
            $table->date('tanggal');
            $table->string('kd_dokter', 20)->index('rujukanranap_dokter_rs_ibfk_1');
            $table->string('no_rkm_medis', 15)->index('no_rkm_medis');
            $table->string('kd_kamar', 15)->index('kd_kamar');
            $table->double('jasarujuk');

            $table->primary(['tanggal', 'kd_dokter', 'no_rkm_medis', 'kd_kamar']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rujukanranap_dokter_rs');
    }
}
