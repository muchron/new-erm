<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIpsrsdetailpesanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ipsrsdetailpesan', function (Blueprint $table) {
            $table->string('no_faktur', 20)->index('no_faktur');
            $table->string('kode_brng', 15)->index('kode_brng');
            $table->char('kode_sat', 4)->index('kode_sat');
            $table->double('jumlah');
            $table->double('harga');
            $table->double('subtotal');
            $table->double('dis');
            $table->double('besardis');
            $table->double('total');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ipsrsdetailpesan');
    }
}
