<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToPerpustakaanInventarisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('perpustakaan_inventaris', function (Blueprint $table) {
            $table->foreign(['kode_buku'], 'perpustakaan_inventaris_ibfk_1')->references(['kode_buku'])->on('perpustakaan_buku')->onUpdate('CASCADE');
            $table->foreign(['kd_ruang'], 'perpustakaan_inventaris_ibfk_2')->references(['kd_ruang'])->on('perpustakaan_ruang')->onUpdate('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('perpustakaan_inventaris', function (Blueprint $table) {
            $table->dropForeign('perpustakaan_inventaris_ibfk_1');
            $table->dropForeign('perpustakaan_inventaris_ibfk_2');
        });
    }
}
