<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePerpustakaanBukuTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('perpustakaan_buku', function (Blueprint $table) {
            $table->string('kode_buku', 10)->default('')->primary();
            $table->string('judul_buku', 200)->nullable();
            $table->char('jml_halaman', 5)->nullable();
            $table->string('kode_penerbit', 10)->nullable()->index('kode_penerbit');
            $table->string('kode_pengarang', 7)->nullable()->index('kode_pengarang');
            $table->year('thn_terbit')->nullable();
            $table->string('isbn', 20)->nullable();
            $table->char('id_kategori', 5)->nullable()->index('id_kategori');
            $table->char('id_jenis', 5)->nullable()->index('id_jenis');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('perpustakaan_buku');
    }
}
