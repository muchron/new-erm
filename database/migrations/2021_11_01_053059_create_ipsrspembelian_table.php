<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIpsrspembelianTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ipsrspembelian', function (Blueprint $table) {
            $table->string('no_faktur', 15)->primary();
            $table->char('kode_suplier', 5)->index('kode_suplier');
            $table->string('nip', 20)->index('nip');
            $table->date('tgl_beli')->index('tgl_beli');
            $table->double('subtotal')->index('subtotal');
            $table->double('potongan')->index('potongan');
            $table->double('total')->index('total');
            $table->double('ppn')->nullable();
            $table->double('meterai')->nullable();
            $table->double('tagihan')->nullable();
            $table->string('kd_rek', 15)->nullable()->index('ipsrspembelian_ibfk_5');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ipsrspembelian');
    }
}
