<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIpsrsdetailbeliTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ipsrsdetailbeli', function (Blueprint $table) {
            $table->string('no_faktur', 15)->index('no_faktur');
            $table->string('kode_brng', 15)->index('kode_brng');
            $table->char('kode_sat', 4)->index('kode_sat');
            $table->double('jumlah')->index('jumlah');
            $table->double('harga')->index('harga');
            $table->double('subtotal')->index('subtotal');
            $table->double('dis')->index('dis');
            $table->double('besardis')->index('besardis');
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
        Schema::dropIfExists('ipsrsdetailbeli');
    }
}
