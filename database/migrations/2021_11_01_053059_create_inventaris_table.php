<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInventarisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inventaris', function (Blueprint $table) {
            $table->string('no_inventaris', 30)->primary();
            $table->string('kode_barang', 20)->nullable()->index('kode_barang');
            $table->enum('asal_barang', ['Beli', 'Bantuan', 'Hibah', '-'])->nullable()->index('asal_barang');
            $table->date('tgl_pengadaan')->nullable()->index('tgl_pengadaan');
            $table->double('harga')->nullable()->index('harga');
            $table->enum('status_barang', ['Ada', 'Rusak', 'Hilang', 'Perbaikan', 'Dipinjam', '-'])->nullable()->index('status_barang');
            $table->char('id_ruang', 5)->nullable()->index('kd_ruang');
            $table->char('no_rak', 3)->nullable()->index('no_rak');
            $table->char('no_box', 3)->nullable()->index('no_box');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('inventaris');
    }
}
