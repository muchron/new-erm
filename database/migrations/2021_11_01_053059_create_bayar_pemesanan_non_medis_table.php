<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBayarPemesananNonMedisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bayar_pemesanan_non_medis', function (Blueprint $table) {
            $table->date('tgl_bayar')->nullable()->index('tgl_bayar');
            $table->string('no_faktur', 20)->nullable()->index('no_faktur');
            $table->string('nip', 20)->nullable()->index('nip');
            $table->double('besar_bayar')->nullable();
            $table->string('keterangan', 100)->nullable();
            $table->string('nama_bayar', 50)->nullable()->index('nama_bayar');
            $table->string('no_bukti', 20)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bayar_pemesanan_non_medis');
    }
}
