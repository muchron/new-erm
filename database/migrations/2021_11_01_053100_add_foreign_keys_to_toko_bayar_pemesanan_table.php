<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToTokoBayarPemesananTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('toko_bayar_pemesanan', function (Blueprint $table) {
            $table->foreign(['no_faktur'], 'toko_bayar_pemesanan_ibfk_1')->references(['no_faktur'])->on('tokopemesanan')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['nip'], 'toko_bayar_pemesanan_ibfk_2')->references(['nip'])->on('petugas')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['nama_bayar'], 'toko_bayar_pemesanan_ibfk_3')->references(['nama_bayar'])->on('akun_bayar')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('toko_bayar_pemesanan', function (Blueprint $table) {
            $table->dropForeign('toko_bayar_pemesanan_ibfk_1');
            $table->dropForeign('toko_bayar_pemesanan_ibfk_2');
            $table->dropForeign('toko_bayar_pemesanan_ibfk_3');
        });
    }
}
