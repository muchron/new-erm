<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePcareTindakanRanapDiberikanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pcare_tindakan_ranap_diberikan', function (Blueprint $table) {
            $table->string('no_rawat', 17);
            $table->string('noKunjungan', 40);
            $table->string('kdTindakanSK', 15)->nullable();
            $table->date('tgl_perawatan');
            $table->time('jam');
            $table->string('kd_jenis_prw', 15)->index('kd_jenis_prw');
            $table->double('material');
            $table->double('bhp');
            $table->double('tarif_tindakandr');
            $table->double('tarif_tindakanpr');
            $table->double('kso');
            $table->double('menejemen');
            $table->double('biaya_rawat');

            $table->primary(['no_rawat', 'noKunjungan', 'tgl_perawatan', 'jam', 'kd_jenis_prw']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pcare_tindakan_ranap_diberikan');
    }
}
