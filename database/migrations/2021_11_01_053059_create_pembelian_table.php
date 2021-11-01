<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePembelianTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pembelian', function (Blueprint $table) {
            $table->string('no_faktur', 20)->primary();
            $table->char('kode_suplier', 5)->nullable()->index('kode_suplier');
            $table->string('nip', 20)->nullable()->index('nip');
            $table->date('tgl_beli')->nullable();
            $table->double('total1');
            $table->double('potongan');
            $table->double('total2');
            $table->double('ppn');
            $table->double('tagihan');
            $table->char('kd_bangsal', 5)->index('kd_bangsal');
            $table->string('kd_rek', 15)->nullable()->index('pembelian_ibfk_4');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pembelian');
    }
}
