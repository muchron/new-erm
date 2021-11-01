<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTokoRiwayatBarangTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('toko_riwayat_barang', function (Blueprint $table) {
            $table->string('kode_brng', 10)->nullable()->index('kode_brng');
            $table->double('stok_awal')->nullable();
            $table->double('masuk')->nullable();
            $table->double('keluar')->nullable();
            $table->double('stok_akhir');
            $table->enum('posisi', ['Pengadaan', 'Penerimaan', 'Piutang', 'Retur Beli', 'Retur Jual', 'Retur Piutang', 'Opname', 'Penjualan', 'Stok Keluar'])->nullable();
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
        Schema::dropIfExists('toko_riwayat_barang');
    }
}
