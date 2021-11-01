<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToTokoDetailPengajuanBarangTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('toko_detail_pengajuan_barang', function (Blueprint $table) {
            $table->foreign(['kode_brng'], 'toko_detail_pengajuan_barang_ibfk_1')->references(['kode_brng'])->on('tokobarang')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['kode_sat'], 'toko_detail_pengajuan_barang_ibfk_2')->references(['kode_sat'])->on('kodesatuan')->onUpdate('CASCADE');
            $table->foreign(['no_pengajuan'], 'toko_detail_pengajuan_barang_ibfk_3')->references(['no_pengajuan'])->on('toko_pengajuan_barang')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('toko_detail_pengajuan_barang', function (Blueprint $table) {
            $table->dropForeign('toko_detail_pengajuan_barang_ibfk_1');
            $table->dropForeign('toko_detail_pengajuan_barang_ibfk_2');
            $table->dropForeign('toko_detail_pengajuan_barang_ibfk_3');
        });
    }
}
