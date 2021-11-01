<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToIpsrsRiwayatBarangTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('ipsrs_riwayat_barang', function (Blueprint $table) {
            $table->foreign(['kode_brng'], 'ipsrs_riwayat_barang_ibfk_1')->references(['kode_brng'])->on('ipsrsbarang')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('ipsrs_riwayat_barang', function (Blueprint $table) {
            $table->dropForeign('ipsrs_riwayat_barang_ibfk_1');
        });
    }
}
