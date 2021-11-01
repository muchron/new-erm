<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToDetailPengajuanBarangNonmedisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('detail_pengajuan_barang_nonmedis', function (Blueprint $table) {
            $table->foreign(['kode_brng'], 'detail_pengajuan_barang_nonmedis_ibfk_1')->references(['kode_brng'])->on('ipsrsbarang')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['kode_sat'], 'detail_pengajuan_barang_nonmedis_ibfk_2')->references(['kode_sat'])->on('kodesatuan')->onUpdate('CASCADE');
            $table->foreign(['no_pengajuan'], 'detail_pengajuan_barang_nonmedis_ibfk_3')->references(['no_pengajuan'])->on('pengajuan_barang_nonmedis')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('detail_pengajuan_barang_nonmedis', function (Blueprint $table) {
            $table->dropForeign('detail_pengajuan_barang_nonmedis_ibfk_1');
            $table->dropForeign('detail_pengajuan_barang_nonmedis_ibfk_2');
            $table->dropForeign('detail_pengajuan_barang_nonmedis_ibfk_3');
        });
    }
}
