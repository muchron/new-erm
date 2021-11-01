<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToInventarisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('inventaris', function (Blueprint $table) {
            $table->foreign(['kode_barang'], 'inventaris_ibfk_1')->references(['kode_barang'])->on('inventaris_barang')->onUpdate('CASCADE');
            $table->foreign(['id_ruang'], 'inventaris_ibfk_2')->references(['id_ruang'])->on('inventaris_ruang')->onUpdate('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('inventaris', function (Blueprint $table) {
            $table->dropForeign('inventaris_ibfk_1');
            $table->dropForeign('inventaris_ibfk_2');
        });
    }
}
