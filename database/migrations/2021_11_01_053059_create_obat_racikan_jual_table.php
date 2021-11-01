<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateObatRacikanJualTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('obat_racikan_jual', function (Blueprint $table) {
            $table->string('nota_jual', 20);
            $table->string('no_racik', 2);
            $table->string('nama_racik', 100);
            $table->string('kd_racik', 3)->index('kd_racik');
            $table->integer('jml_dr');
            $table->string('aturan_pakai', 150);
            $table->string('keterangan', 50);

            $table->primary(['nota_jual', 'no_racik']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('obat_racikan_jual');
    }
}
