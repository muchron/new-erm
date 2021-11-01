<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToPerpustakaanBukuTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('perpustakaan_buku', function (Blueprint $table) {
            $table->foreign(['kode_penerbit'], 'perpustakaan_buku_ibfk_1')->references(['kode_penerbit'])->on('perpustakaan_penerbit')->onUpdate('CASCADE');
            $table->foreign(['kode_pengarang'], 'perpustakaan_buku_ibfk_2')->references(['kode_pengarang'])->on('perpustakaan_pengarang')->onUpdate('CASCADE');
            $table->foreign(['id_kategori'], 'perpustakaan_buku_ibfk_3')->references(['id_kategori'])->on('perpustakaan_kategori')->onUpdate('CASCADE');
            $table->foreign(['id_jenis'], 'perpustakaan_buku_ibfk_4')->references(['id_jenis'])->on('perpustakaan_jenis_buku')->onUpdate('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('perpustakaan_buku', function (Blueprint $table) {
            $table->dropForeign('perpustakaan_buku_ibfk_1');
            $table->dropForeign('perpustakaan_buku_ibfk_2');
            $table->dropForeign('perpustakaan_buku_ibfk_3');
            $table->dropForeign('perpustakaan_buku_ibfk_4');
        });
    }
}
