<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIpsrsRiwayatBarangTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ipsrs_riwayat_barang', function (Blueprint $table) {
            $table->string('kode_brng', 10)->nullable()->index('kode_brng');
            $table->double('stok_awal')->nullable();
            $table->double('masuk')->nullable();
            $table->double('keluar')->nullable();
            $table->double('stok_akhir');
            $table->enum('posisi', ['Pengadaan', 'Penerimaan', 'Retur Beli', 'Opname', 'Stok Keluar', 'Pengambilan UTD'])->nullable();
            $table->date('tanggal')->nullable();
            $table->time('jam')->nullable();
            $table->string('petugas', 20)->nullable();
            $table->enum('status', ['Simpan', 'Hapus'])->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ipsrs_riwayat_barang');
    }
}
