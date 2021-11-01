<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDatabarangTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('databarang', function (Blueprint $table) {
            $table->string('kode_brng', 15)->default('')->primary();
            $table->string('nama_brng', 80)->nullable()->index('nama_brng');
            $table->char('kode_satbesar', 4)->index('kode_satbesar');
            $table->char('kode_sat', 4)->nullable()->index('kode_sat');
            $table->string('letak_barang', 50)->nullable()->index('letak_barang');
            $table->double('dasar');
            $table->double('h_beli')->nullable()->index('h_beli');
            $table->double('ralan')->nullable()->index('h_distributor');
            $table->double('kelas1')->nullable()->index('h_grosir');
            $table->double('kelas2')->nullable()->index('h_retail');
            $table->double('kelas3')->nullable()->index('kelas3');
            $table->double('utama')->nullable()->index('utama');
            $table->double('vip')->nullable()->index('vip');
            $table->double('vvip')->nullable()->index('vvip');
            $table->double('beliluar')->nullable()->index('beliluar');
            $table->double('jualbebas')->nullable()->index('jualbebas');
            $table->double('karyawan')->nullable()->index('karyawan');
            $table->double('stokminimal')->nullable()->index('stok');
            $table->char('kdjns', 4)->nullable()->index('kdjns');
            $table->double('isi');
            $table->double('kapasitas')->index('kapasitas');
            $table->date('expire')->nullable()->index('expire');
            $table->enum('status', ['0', '1'])->index('status');
            $table->char('kode_industri', 5)->nullable()->index('kode_industri');
            $table->char('kode_kategori', 4)->nullable()->index('kode_kategori');
            $table->char('kode_golongan', 4)->nullable()->index('kode_golongan');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('databarang');
    }
}
