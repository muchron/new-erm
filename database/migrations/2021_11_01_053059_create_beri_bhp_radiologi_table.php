<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBeriBhpRadiologiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('beri_bhp_radiologi', function (Blueprint $table) {
            $table->string('no_rawat', 17)->index('no_rawat');
            $table->date('tgl_periksa')->index('tgl_periksa');
            $table->time('jam')->index('jam');
            $table->string('kode_brng', 15)->index('kode_brng');
            $table->char('kode_sat', 4)->index('kode_sat');
            $table->double('jumlah')->index('jumlah');
            $table->double('harga')->nullable();
            $table->double('total')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('beri_bhp_radiologi');
    }
}
