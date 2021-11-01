<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateObatRacikanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('obat_racikan', function (Blueprint $table) {
            $table->date('tgl_perawatan');
            $table->time('jam');
            $table->string('no_rawat', 17)->index('no_rawat');
            $table->string('no_racik', 2)->index('no_racik');
            $table->string('nama_racik', 100);
            $table->string('kd_racik', 3)->index('kd_racik');
            $table->integer('jml_dr');
            $table->string('aturan_pakai', 150);
            $table->string('keterangan', 50);

            $table->primary(['tgl_perawatan', 'jam', 'no_rawat', 'no_racik']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('obat_racikan');
    }
}
