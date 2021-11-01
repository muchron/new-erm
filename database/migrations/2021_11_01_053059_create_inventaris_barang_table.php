<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInventarisBarangTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inventaris_barang', function (Blueprint $table) {
            $table->string('kode_barang', 20)->primary();
            $table->string('nama_barang', 60)->nullable()->index('nama_barang');
            $table->integer('jml_barang')->nullable()->index('jml_barang');
            $table->string('kode_produsen', 10)->nullable()->index('kode_produsen');
            $table->string('id_merk', 10)->nullable()->index('id_merk');
            $table->year('thn_produksi')->nullable()->index('thn_produksi');
            $table->string('isbn', 20)->nullable()->index('isbn');
            $table->char('id_kategori', 10)->nullable()->index('id_kategori');
            $table->char('id_jenis', 10)->nullable()->index('id_jenis');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('inventaris_barang');
    }
}
