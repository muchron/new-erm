<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToPenjualanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('penjualan', function (Blueprint $table) {
            $table->foreign(['no_rkm_medis'], 'penjualan_ibfk_10')->references(['no_rkm_medis'])->on('pasien')->onUpdate('CASCADE');
            $table->foreign(['kd_bangsal'], 'penjualan_ibfk_11')->references(['kd_bangsal'])->on('bangsal')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['kd_rek'], 'penjualan_ibfk_12')->references(['kd_rek'])->on('rekening')->onUpdate('CASCADE');
            $table->foreign(['nama_bayar'], 'penjualan_ibfk_13')->references(['nama_bayar'])->on('akun_bayar')->onUpdate('CASCADE');
            $table->foreign(['nip'], 'penjualan_ibfk_9')->references(['nip'])->on('petugas')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('penjualan', function (Blueprint $table) {
            $table->dropForeign('penjualan_ibfk_10');
            $table->dropForeign('penjualan_ibfk_11');
            $table->dropForeign('penjualan_ibfk_12');
            $table->dropForeign('penjualan_ibfk_13');
            $table->dropForeign('penjualan_ibfk_9');
        });
    }
}
