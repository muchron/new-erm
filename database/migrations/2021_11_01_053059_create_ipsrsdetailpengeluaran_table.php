<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIpsrsdetailpengeluaranTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ipsrsdetailpengeluaran', function (Blueprint $table) {
            $table->string('no_keluar', 15)->index('no_keluar');
            $table->string('kode_brng', 15)->index('kode_brng');
            $table->char('kode_sat', 4)->index('kode_sat');
            $table->double('jumlah')->index('jumlah');
            $table->double('harga')->index('harga');
            $table->double('total')->index('total');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ipsrsdetailpengeluaran');
    }
}
