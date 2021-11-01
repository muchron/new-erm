<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRawatInapDrprTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rawat_inap_drpr', function (Blueprint $table) {
            $table->string('no_rawat', 17)->default('');
            $table->string('kd_jenis_prw', 15)->index('rawat_inap_drpr_ibfk_2');
            $table->string('kd_dokter', 20)->index('rawat_inap_drpr_ibfk_3');
            $table->string('nip', 20)->default('')->index('rawat_inap_drpr_ibfk_4');
            $table->date('tgl_perawatan')->default('0000-00-00');
            $table->time('jam_rawat')->default('00:00:00');
            $table->double('material');
            $table->double('bhp');
            $table->double('tarif_tindakandr')->nullable();
            $table->double('tarif_tindakanpr')->nullable();
            $table->double('kso')->nullable();
            $table->double('menejemen')->nullable();
            $table->double('biaya_rawat')->nullable();

            $table->primary(['no_rawat', 'kd_jenis_prw', 'kd_dokter', 'nip', 'tgl_perawatan', 'jam_rawat']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rawat_inap_drpr');
    }
}
