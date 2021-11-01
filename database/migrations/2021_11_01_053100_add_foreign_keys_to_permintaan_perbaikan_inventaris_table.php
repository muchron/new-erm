<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToPermintaanPerbaikanInventarisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('permintaan_perbaikan_inventaris', function (Blueprint $table) {
            $table->foreign(['no_inventaris'], 'permintaan_perbaikan_inventaris_ibfk_1')->references(['no_inventaris'])->on('inventaris')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['nik'], 'permintaan_perbaikan_inventaris_ibfk_2')->references(['nik'])->on('pegawai')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('permintaan_perbaikan_inventaris', function (Blueprint $table) {
            $table->dropForeign('permintaan_perbaikan_inventaris_ibfk_1');
            $table->dropForeign('permintaan_perbaikan_inventaris_ibfk_2');
        });
    }
}
