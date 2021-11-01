<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToBayarPemesananTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('bayar_pemesanan', function (Blueprint $table) {
            $table->foreign(['no_faktur'], 'bayar_pemesanan_ibfk_1')->references(['no_faktur'])->on('pemesanan')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['nip'], 'bayar_pemesanan_ibfk_2')->references(['nip'])->on('petugas')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['nama_bayar'], 'bayar_pemesanan_ibfk_3')->references(['nama_bayar'])->on('akun_bayar')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('bayar_pemesanan', function (Blueprint $table) {
            $table->dropForeign('bayar_pemesanan_ibfk_1');
            $table->dropForeign('bayar_pemesanan_ibfk_2');
            $table->dropForeign('bayar_pemesanan_ibfk_3');
        });
    }
}
