<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRawatInapPrTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rawat_inap_pr', function (Blueprint $table) {
            $table->string('no_rawat', 17)->default('')->index('no_rawat');
            $table->string('kd_jenis_prw', 15)->index('kd_jenis_prw');
            $table->string('nip', 20)->default('')->index('nip');
            $table->date('tgl_perawatan')->default('0000-00-00');
            $table->time('jam_rawat')->default('00:00:00');
            $table->double('material');
            $table->double('bhp');
            $table->double('tarif_tindakanpr');
            $table->double('kso')->nullable();
            $table->double('menejemen')->nullable();
            $table->double('biaya_rawat')->nullable()->index('biaya_rawat');

            $table->primary(['no_rawat', 'kd_jenis_prw', 'nip', 'tgl_perawatan', 'jam_rawat']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rawat_inap_pr');
    }
}
