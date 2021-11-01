<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRawatInapDrTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rawat_inap_dr', function (Blueprint $table) {
            $table->string('no_rawat', 17)->default('')->index('no_rawat');
            $table->string('kd_jenis_prw', 15)->index('kd_jenis_prw');
            $table->string('kd_dokter', 20)->index('kd_dokter');
            $table->date('tgl_perawatan')->default('0000-00-00')->index('tgl_perawatan');
            $table->time('jam_rawat')->default('00:00:00')->index('jam_rawat');
            $table->double('material');
            $table->double('bhp');
            $table->double('tarif_tindakandr');
            $table->double('kso')->nullable();
            $table->double('menejemen')->nullable();
            $table->double('biaya_rawat')->nullable()->index('biaya_rawat');

            $table->primary(['no_rawat', 'kd_jenis_prw', 'kd_dokter', 'tgl_perawatan', 'jam_rawat']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rawat_inap_dr');
    }
}
