<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSetAkunTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('set_akun', function (Blueprint $table) {
            $table->string('Pengadaan_Obat', 15)->nullable()->index('Pengadaan_Obat');
            $table->string('Pemesanan_Obat', 15)->nullable()->index('Pemesanan_Obat');
            $table->string('Kontra_Pemesanan_Obat', 15)->nullable()->index('Kontra_Pemesanan_Obat');
            $table->string('Bayar_Pemesanan_Obat', 15)->nullable()->index('Bayar_Pemesanan_Obat');
            $table->string('Penjualan_Obat', 15)->nullable()->index('Penjualan_Obat');
            $table->string('Piutang_Obat', 15)->nullable()->index('Piutang_Obat');
            $table->string('Kontra_Piutang_Obat', 15)->nullable()->index('Kontra_Piutang_Obat');
            $table->string('Retur_Ke_Suplayer', 15)->nullable()->index('Retur_Ke_Suplayer');
            $table->string('Kontra_Retur_Ke_Suplayer', 15)->nullable()->index('Kontra_Retur_Ke_Suplayer');
            $table->string('Retur_Dari_pembeli', 15)->nullable()->index('Retur_Dari_pembeli');
            $table->string('Kontra_Retur_Dari_Pembeli', 15)->nullable()->index('Kontra_Retur_Dari_Pembeli');
            $table->string('Retur_Piutang_Obat', 15)->nullable()->index('Retur_Piutang_Obat');
            $table->string('Kontra_Retur_Piutang_Obat', 15)->nullable()->index('Kontra_Retur_Piutang_Obat');
            $table->string('Pengadaan_Ipsrs', 15)->nullable()->index('Pengadaan_Ipsrs');
            $table->string('Stok_Keluar_Ipsrs', 15)->nullable()->index('Stok_Keluar_Ipsrs');
            $table->string('Kontra_Stok_Keluar_Ipsrs', 15)->nullable()->index('Kontra_Stok_Keluar_Ipsrs');
            $table->string('Bayar_Piutang_Pasien', 15)->nullable()->index('Bayar_Piutang_Pasien');
            $table->string('Pengambilan_Utd', 15)->nullable()->index('Pengambilan_Utd');
            $table->string('Kontra_Pengambilan_Utd', 15)->nullable()->index('Kontra_Pengambilan_Utd');
            $table->string('Pengambilan_Penunjang_Utd', 15)->nullable()->index('Pengambilan_Penunjang_Utd');
            $table->string('Kontra_Pengambilan_Penunjang_Utd', 15)->nullable()->index('Kontra_Pengambilan_Penunjang_Utd');
            $table->string('Penyerahan_Darah', 15)->nullable()->index('Penyerahan_Darah');
            $table->string('Stok_Keluar_Medis', 15)->index('Stok_Keluar_Medis');
            $table->string('Kontra_Stok_Keluar_Medis', 15)->index('Kontra_Stok_Keluar_Medis');
            $table->string('HPP_Obat_Jual_Bebas', 15)->nullable()->index('HPP_Obat_Jual_Bebas');
            $table->string('Persediaan_Obat_Jual_Bebas', 15)->nullable()->index('Persediaan_Obat_Jual_Bebas');
            $table->string('Penerimaan_NonMedis', 15)->index('Penerimaan_NonMedis');
            $table->string('Kontra_Penerimaan_NonMedis', 15)->index('Kontra_Penerimaan_NonMedis');
            $table->string('Bayar_Pemesanan_Non_Medis', 15)->index('Bayar_Pemesanan_Non_Medis');
            $table->string('Hibah_Obat', 15)->index('Hibah_Obat');
            $table->string('Kontra_Hibah_Obat', 15)->index('Kontra_Hibah_Obat');
            $table->string('Penerimaan_Toko', 15)->nullable()->index('Penerimaan_Toko');
            $table->string('Kontra_Penerimaan_Toko', 15)->nullable()->index('Kontra_Penerimaan_Toko');
            $table->string('Pengadaan_Toko', 15)->index('Pengadaan_Toko');
            $table->string('Bayar_Pemesanan_Toko', 15)->nullable()->index('Bayar_Pemesanan_Toko');
            $table->string('Penjualan_Toko', 15)->nullable()->index('Penjualan_Toko');
            $table->string('HPP_Barang_Toko', 15)->nullable()->index('HPP_Barang_Toko');
            $table->string('Persediaan_Barang_Toko', 15)->nullable()->index('Persediaan_Barang_Toko');
            $table->string('Piutang_Toko', 15)->nullable()->index('Piutang_Toko');
            $table->string('Kontra_Piutang_Toko', 15)->nullable()->index('Kontra_Piutang_Toko');
            $table->string('Retur_Beli_Toko', 15)->nullable()->index('Retur_Beli_Toko');
            $table->string('Kontra_Retur_Beli_Toko', 15)->nullable()->index('Kontra_Retur_Beli_Toko');
            $table->string('Retur_Beli_Non_Medis', 15)->nullable()->index('Retur_Beli_Non_Medis');
            $table->string('Kontra_Retur_Beli_Non_Medis', 15)->nullable()->index('Kontra_Retur_Beli_Non_Medis');
            $table->string('Retur_Jual_Toko', 15)->nullable()->index('Retur_Jual_Toko');
            $table->string('Kontra_Retur_Jual_Toko', 15)->nullable()->index('Kontra_Retur_Jual_Toko');
            $table->string('Retur_Piutang_Toko', 15)->nullable()->index('Retur_Piutang_Toko');
            $table->string('Kontra_Retur_Piutang_Toko', 15)->nullable()->index('Kontra_Retur_Piutang_Toko');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('set_akun');
    }
}
