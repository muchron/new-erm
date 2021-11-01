<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToPerpustakaanPeminjamanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('perpustakaan_peminjaman', function (Blueprint $table) {
            $table->foreign(['no_anggota'], 'perpustakaan_peminjaman_ibfk_1')->references(['no_anggota'])->on('perpustakaan_anggota')->onUpdate('CASCADE');
            $table->foreign(['no_inventaris'], 'perpustakaan_peminjaman_ibfk_2')->references(['no_inventaris'])->on('perpustakaan_inventaris')->onUpdate('CASCADE');
            $table->foreign(['nip'], 'perpustakaan_peminjaman_ibfk_3')->references(['nip'])->on('petugas')->onUpdate('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('perpustakaan_peminjaman', function (Blueprint $table) {
            $table->dropForeign('perpustakaan_peminjaman_ibfk_1');
            $table->dropForeign('perpustakaan_peminjaman_ibfk_2');
            $table->dropForeign('perpustakaan_peminjaman_ibfk_3');
        });
    }
}
