<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToTokoRiwayatBarangTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('toko_riwayat_barang', function (Blueprint $table) {
            $table->foreign(['kode_brng'], 'toko_riwayat_barang_ibfk_1')->references(['kode_brng'])->on('tokobarang')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('toko_riwayat_barang', function (Blueprint $table) {
            $table->dropForeign('toko_riwayat_barang_ibfk_1');
        });
    }
}
