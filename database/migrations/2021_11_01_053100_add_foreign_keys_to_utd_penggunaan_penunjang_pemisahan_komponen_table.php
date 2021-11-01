<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToUtdPenggunaanPenunjangPemisahanKomponenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('utd_penggunaan_penunjang_pemisahan_komponen', function (Blueprint $table) {
            $table->foreign(['kode_brng'], 'utd_penggunaan_penunjang_pemisahan_komponen_ibfk_2')->references(['kode_brng'])->on('ipsrsbarang')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['no_donor'], 'utd_penggunaan_penunjang_pemisahan_komponen_ibfk_3')->references(['no_donor'])->on('utd_pemisahan_komponen')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('utd_penggunaan_penunjang_pemisahan_komponen', function (Blueprint $table) {
            $table->dropForeign('utd_penggunaan_penunjang_pemisahan_komponen_ibfk_2');
            $table->dropForeign('utd_penggunaan_penunjang_pemisahan_komponen_ibfk_3');
        });
    }
}
