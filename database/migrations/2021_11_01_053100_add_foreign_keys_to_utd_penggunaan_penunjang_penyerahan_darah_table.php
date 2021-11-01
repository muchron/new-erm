<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToUtdPenggunaanPenunjangPenyerahanDarahTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('utd_penggunaan_penunjang_penyerahan_darah', function (Blueprint $table) {
            $table->foreign(['kode_brng'], 'utd_penggunaan_penunjang_penyerahan_darah_ibfk_1')->references(['kode_brng'])->on('ipsrsbarang')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['no_penyerahan'], 'utd_penggunaan_penunjang_penyerahan_darah_ibfk_2')->references(['no_penyerahan'])->on('utd_penyerahan_darah')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('utd_penggunaan_penunjang_penyerahan_darah', function (Blueprint $table) {
            $table->dropForeign('utd_penggunaan_penunjang_penyerahan_darah_ibfk_1');
            $table->dropForeign('utd_penggunaan_penunjang_penyerahan_darah_ibfk_2');
        });
    }
}
