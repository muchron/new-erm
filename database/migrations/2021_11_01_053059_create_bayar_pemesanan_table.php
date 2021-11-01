<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBayarPemesananTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bayar_pemesanan', function (Blueprint $table) {
            $table->date('tgl_bayar')->nullable();
            $table->string('no_faktur', 20)->nullable()->index('bayar_pemesanan_ibfk_1');
            $table->string('nip', 20)->nullable()->index('bayar_pemesanan_ibfk_2');
            $table->double('besar_bayar')->nullable();
            $table->string('keterangan', 100)->nullable();
            $table->string('nama_bayar', 50)->nullable()->index('bayar_pemesanan_ibfk_3');
            $table->string('no_bukti', 20)->nullable();

            $table->unique(['tgl_bayar', 'no_faktur'], 'tgl_bayar');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bayar_pemesanan');
    }
}
