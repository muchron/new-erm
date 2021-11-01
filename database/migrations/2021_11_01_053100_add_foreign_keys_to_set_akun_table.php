<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToSetAkunTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('set_akun', function (Blueprint $table) {
            $table->foreign(['Pengadaan_Obat'], 'set_akun_ibfk_1')->references(['kd_rek'])->on('rekening')->onUpdate('CASCADE');
            $table->foreign(['Retur_Dari_pembeli'], 'set_akun_ibfk_10')->references(['kd_rek'])->on('rekening')->onUpdate('CASCADE');
            $table->foreign(['Kontra_Retur_Dari_Pembeli'], 'set_akun_ibfk_11')->references(['kd_rek'])->on('rekening')->onUpdate('CASCADE');
            $table->foreign(['Retur_Piutang_Obat'], 'set_akun_ibfk_12')->references(['kd_rek'])->on('rekening')->onUpdate('CASCADE');
            $table->foreign(['Kontra_Retur_Piutang_Obat'], 'set_akun_ibfk_13')->references(['kd_rek'])->on('rekening')->onUpdate('CASCADE');
            $table->foreign(['Pengadaan_Ipsrs'], 'set_akun_ibfk_14')->references(['kd_rek'])->on('rekening')->onUpdate('CASCADE');
            $table->foreign(['Stok_Keluar_Ipsrs'], 'set_akun_ibfk_15')->references(['kd_rek'])->on('rekening')->onUpdate('CASCADE');
            $table->foreign(['Kontra_Stok_Keluar_Ipsrs'], 'set_akun_ibfk_16')->references(['kd_rek'])->on('rekening')->onUpdate('CASCADE');
            $table->foreign(['Bayar_Piutang_Pasien'], 'set_akun_ibfk_17')->references(['kd_rek'])->on('rekening')->onUpdate('CASCADE');
            $table->foreign(['Pengambilan_Utd'], 'set_akun_ibfk_18')->references(['kd_rek'])->on('rekening')->onUpdate('CASCADE');
            $table->foreign(['Kontra_Pengambilan_Utd'], 'set_akun_ibfk_19')->references(['kd_rek'])->on('rekening')->onUpdate('CASCADE');
            $table->foreign(['Pemesanan_Obat'], 'set_akun_ibfk_2')->references(['kd_rek'])->on('rekening')->onUpdate('CASCADE');
            $table->foreign(['Pengambilan_Penunjang_Utd'], 'set_akun_ibfk_20')->references(['kd_rek'])->on('rekening')->onUpdate('CASCADE');
            $table->foreign(['Kontra_Pengambilan_Penunjang_Utd'], 'set_akun_ibfk_21')->references(['kd_rek'])->on('rekening')->onUpdate('CASCADE');
            $table->foreign(['Penyerahan_Darah'], 'set_akun_ibfk_22')->references(['kd_rek'])->on('rekening')->onUpdate('CASCADE');
            $table->foreign(['Stok_Keluar_Medis'], 'set_akun_ibfk_23')->references(['kd_rek'])->on('rekening')->onUpdate('CASCADE');
            $table->foreign(['Kontra_Stok_Keluar_Medis'], 'set_akun_ibfk_24')->references(['kd_rek'])->on('rekening')->onUpdate('CASCADE');
            $table->foreign(['HPP_Obat_Jual_Bebas'], 'set_akun_ibfk_25')->references(['kd_rek'])->on('rekening')->onUpdate('CASCADE');
            $table->foreign(['Persediaan_Obat_Jual_Bebas'], 'set_akun_ibfk_26')->references(['kd_rek'])->on('rekening')->onUpdate('CASCADE');
            $table->foreign(['Penerimaan_NonMedis'], 'set_akun_ibfk_27')->references(['kd_rek'])->on('rekening')->onUpdate('CASCADE');
            $table->foreign(['Kontra_Penerimaan_NonMedis'], 'set_akun_ibfk_28')->references(['kd_rek'])->on('rekening')->onUpdate('CASCADE');
            $table->foreign(['Bayar_Pemesanan_Non_Medis'], 'set_akun_ibfk_29')->references(['kd_rek'])->on('rekening')->onUpdate('CASCADE');
            $table->foreign(['Kontra_Pemesanan_Obat'], 'set_akun_ibfk_3')->references(['kd_rek'])->on('rekening')->onUpdate('CASCADE');
            $table->foreign(['Hibah_Obat'], 'set_akun_ibfk_30')->references(['kd_rek'])->on('rekening')->onUpdate('CASCADE');
            $table->foreign(['Kontra_Hibah_Obat'], 'set_akun_ibfk_31')->references(['kd_rek'])->on('rekening')->onUpdate('CASCADE');
            $table->foreign(['Penerimaan_Toko'], 'set_akun_ibfk_32')->references(['kd_rek'])->on('rekening')->onUpdate('CASCADE');
            $table->foreign(['Kontra_Penerimaan_Toko'], 'set_akun_ibfk_33')->references(['kd_rek'])->on('rekening')->onUpdate('CASCADE');
            $table->foreign(['Pengadaan_Toko'], 'set_akun_ibfk_34')->references(['kd_rek'])->on('rekening')->onUpdate('CASCADE');
            $table->foreign(['Bayar_Pemesanan_Toko'], 'set_akun_ibfk_35')->references(['kd_rek'])->on('rekening')->onUpdate('CASCADE');
            $table->foreign(['Penjualan_Toko'], 'set_akun_ibfk_36')->references(['kd_rek'])->on('rekening')->onUpdate('CASCADE');
            $table->foreign(['HPP_Barang_Toko'], 'set_akun_ibfk_37')->references(['kd_rek'])->on('rekening')->onUpdate('CASCADE');
            $table->foreign(['Persediaan_Barang_Toko'], 'set_akun_ibfk_38')->references(['kd_rek'])->on('rekening')->onUpdate('CASCADE');
            $table->foreign(['Piutang_Toko'], 'set_akun_ibfk_39')->references(['kd_rek'])->on('rekening')->onUpdate('CASCADE');
            $table->foreign(['Bayar_Pemesanan_Obat'], 'set_akun_ibfk_4')->references(['kd_rek'])->on('rekening')->onUpdate('CASCADE');
            $table->foreign(['Kontra_Piutang_Toko'], 'set_akun_ibfk_40')->references(['kd_rek'])->on('rekening')->onUpdate('CASCADE');
            $table->foreign(['Retur_Beli_Toko'], 'set_akun_ibfk_41')->references(['kd_rek'])->on('rekening')->onUpdate('CASCADE');
            $table->foreign(['Kontra_Retur_Beli_Toko'], 'set_akun_ibfk_42')->references(['kd_rek'])->on('rekening')->onUpdate('CASCADE');
            $table->foreign(['Retur_Beli_Non_Medis'], 'set_akun_ibfk_43')->references(['kd_rek'])->on('rekening')->onUpdate('CASCADE');
            $table->foreign(['Kontra_Retur_Beli_Non_Medis'], 'set_akun_ibfk_44')->references(['kd_rek'])->on('rekening')->onUpdate('CASCADE');
            $table->foreign(['Retur_Jual_Toko'], 'set_akun_ibfk_45')->references(['kd_rek'])->on('rekening')->onUpdate('CASCADE');
            $table->foreign(['Kontra_Retur_Jual_Toko'], 'set_akun_ibfk_46')->references(['kd_rek'])->on('rekening')->onUpdate('CASCADE');
            $table->foreign(['Retur_Piutang_Toko'], 'set_akun_ibfk_47')->references(['kd_rek'])->on('rekening')->onUpdate('CASCADE');
            $table->foreign(['Kontra_Retur_Piutang_Toko'], 'set_akun_ibfk_48')->references(['kd_rek'])->on('rekening')->onUpdate('CASCADE');
            $table->foreign(['Penjualan_Obat'], 'set_akun_ibfk_5')->references(['kd_rek'])->on('rekening')->onUpdate('CASCADE');
            $table->foreign(['Piutang_Obat'], 'set_akun_ibfk_6')->references(['kd_rek'])->on('rekening')->onUpdate('CASCADE');
            $table->foreign(['Kontra_Piutang_Obat'], 'set_akun_ibfk_7')->references(['kd_rek'])->on('rekening')->onUpdate('CASCADE');
            $table->foreign(['Retur_Ke_Suplayer'], 'set_akun_ibfk_8')->references(['kd_rek'])->on('rekening')->onUpdate('CASCADE');
            $table->foreign(['Kontra_Retur_Ke_Suplayer'], 'set_akun_ibfk_9')->references(['kd_rek'])->on('rekening')->onUpdate('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('set_akun', function (Blueprint $table) {
            $table->dropForeign('set_akun_ibfk_1');
            $table->dropForeign('set_akun_ibfk_10');
            $table->dropForeign('set_akun_ibfk_11');
            $table->dropForeign('set_akun_ibfk_12');
            $table->dropForeign('set_akun_ibfk_13');
            $table->dropForeign('set_akun_ibfk_14');
            $table->dropForeign('set_akun_ibfk_15');
            $table->dropForeign('set_akun_ibfk_16');
            $table->dropForeign('set_akun_ibfk_17');
            $table->dropForeign('set_akun_ibfk_18');
            $table->dropForeign('set_akun_ibfk_19');
            $table->dropForeign('set_akun_ibfk_2');
            $table->dropForeign('set_akun_ibfk_20');
            $table->dropForeign('set_akun_ibfk_21');
            $table->dropForeign('set_akun_ibfk_22');
            $table->dropForeign('set_akun_ibfk_23');
            $table->dropForeign('set_akun_ibfk_24');
            $table->dropForeign('set_akun_ibfk_25');
            $table->dropForeign('set_akun_ibfk_26');
            $table->dropForeign('set_akun_ibfk_27');
            $table->dropForeign('set_akun_ibfk_28');
            $table->dropForeign('set_akun_ibfk_29');
            $table->dropForeign('set_akun_ibfk_3');
            $table->dropForeign('set_akun_ibfk_30');
            $table->dropForeign('set_akun_ibfk_31');
            $table->dropForeign('set_akun_ibfk_32');
            $table->dropForeign('set_akun_ibfk_33');
            $table->dropForeign('set_akun_ibfk_34');
            $table->dropForeign('set_akun_ibfk_35');
            $table->dropForeign('set_akun_ibfk_36');
            $table->dropForeign('set_akun_ibfk_37');
            $table->dropForeign('set_akun_ibfk_38');
            $table->dropForeign('set_akun_ibfk_39');
            $table->dropForeign('set_akun_ibfk_4');
            $table->dropForeign('set_akun_ibfk_40');
            $table->dropForeign('set_akun_ibfk_41');
            $table->dropForeign('set_akun_ibfk_42');
            $table->dropForeign('set_akun_ibfk_43');
            $table->dropForeign('set_akun_ibfk_44');
            $table->dropForeign('set_akun_ibfk_45');
            $table->dropForeign('set_akun_ibfk_46');
            $table->dropForeign('set_akun_ibfk_47');
            $table->dropForeign('set_akun_ibfk_48');
            $table->dropForeign('set_akun_ibfk_5');
            $table->dropForeign('set_akun_ibfk_6');
            $table->dropForeign('set_akun_ibfk_7');
            $table->dropForeign('set_akun_ibfk_8');
            $table->dropForeign('set_akun_ibfk_9');
        });
    }
}
