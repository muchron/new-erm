<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToDatabarangTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('databarang', function (Blueprint $table) {
            $table->foreign(['kdjns'], 'databarang_ibfk_2')->references(['kdjns'])->on('jenis')->onUpdate('CASCADE');
            $table->foreign(['kode_sat'], 'databarang_ibfk_3')->references(['kode_sat'])->on('kodesatuan')->onUpdate('CASCADE');
            $table->foreign(['kode_industri'], 'databarang_ibfk_4')->references(['kode_industri'])->on('industrifarmasi')->onUpdate('CASCADE');
            $table->foreign(['kode_kategori'], 'databarang_ibfk_5')->references(['kode'])->on('kategori_barang')->onUpdate('CASCADE');
            $table->foreign(['kode_golongan'], 'databarang_ibfk_6')->references(['kode'])->on('golongan_barang')->onUpdate('CASCADE');
            $table->foreign(['kode_satbesar'], 'databarang_ibfk_7')->references(['kode_sat'])->on('kodesatuan')->onUpdate('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('databarang', function (Blueprint $table) {
            $table->dropForeign('databarang_ibfk_2');
            $table->dropForeign('databarang_ibfk_3');
            $table->dropForeign('databarang_ibfk_4');
            $table->dropForeign('databarang_ibfk_5');
            $table->dropForeign('databarang_ibfk_6');
            $table->dropForeign('databarang_ibfk_7');
        });
    }
}
