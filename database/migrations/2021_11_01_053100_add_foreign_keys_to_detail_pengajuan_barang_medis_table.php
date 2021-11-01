<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToDetailPengajuanBarangMedisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('detail_pengajuan_barang_medis', function (Blueprint $table) {
            $table->foreign(['kode_brng'], 'detail_pengajuan_barang_medis_ibfk_1')->references(['kode_brng'])->on('databarang')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['kode_sat'], 'detail_pengajuan_barang_medis_ibfk_2')->references(['kode_sat'])->on('kodesatuan')->onUpdate('CASCADE');
            $table->foreign(['no_pengajuan'], 'detail_pengajuan_barang_medis_ibfk_3')->references(['no_pengajuan'])->on('pengajuan_barang_medis')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('detail_pengajuan_barang_medis', function (Blueprint $table) {
            $table->dropForeign('detail_pengajuan_barang_medis_ibfk_1');
            $table->dropForeign('detail_pengajuan_barang_medis_ibfk_2');
            $table->dropForeign('detail_pengajuan_barang_medis_ibfk_3');
        });
    }
}
