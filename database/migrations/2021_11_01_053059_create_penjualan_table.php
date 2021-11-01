<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePenjualanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('penjualan', function (Blueprint $table) {
            $table->string('nota_jual', 20)->primary();
            $table->date('tgl_jual')->nullable();
            $table->char('nip', 20)->nullable()->index('nip');
            $table->string('no_rkm_medis', 15)->nullable()->index('no_rkm_medis');
            $table->string('nm_pasien', 50)->nullable();
            $table->string('keterangan', 40)->nullable();
            $table->enum('jns_jual', ['Jual Bebas', 'Karyawan', 'Beli Luar', 'Rawat Jalan', 'Kelas 1', 'Kelas 2', 'Kelas 3', 'Utama/BPJS', 'VIP', 'VVIP'])->nullable();
            $table->double('ongkir')->nullable();
            $table->enum('status', ['Belum Dibayar', 'Sudah Dibayar'])->nullable();
            $table->char('kd_bangsal', 5)->index('kd_bangsal');
            $table->string('kd_rek', 15)->nullable()->index('penjualan_ibfk_12');
            $table->string('nama_bayar', 50)->nullable()->index('nama_bayar');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('penjualan');
    }
}
