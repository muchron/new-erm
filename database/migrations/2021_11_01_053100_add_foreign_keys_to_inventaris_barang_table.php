<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToInventarisBarangTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('inventaris_barang', function (Blueprint $table) {
            $table->foreign(['kode_produsen'], 'inventaris_barang_ibfk_5')->references(['kode_produsen'])->on('inventaris_produsen')->onUpdate('CASCADE');
            $table->foreign(['id_merk'], 'inventaris_barang_ibfk_6')->references(['id_merk'])->on('inventaris_merk')->onUpdate('CASCADE');
            $table->foreign(['id_kategori'], 'inventaris_barang_ibfk_7')->references(['id_kategori'])->on('inventaris_kategori')->onUpdate('CASCADE');
            $table->foreign(['id_jenis'], 'inventaris_barang_ibfk_8')->references(['id_jenis'])->on('inventaris_jenis')->onUpdate('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('inventaris_barang', function (Blueprint $table) {
            $table->dropForeign('inventaris_barang_ibfk_5');
            $table->dropForeign('inventaris_barang_ibfk_6');
            $table->dropForeign('inventaris_barang_ibfk_7');
            $table->dropForeign('inventaris_barang_ibfk_8');
        });
    }
}
