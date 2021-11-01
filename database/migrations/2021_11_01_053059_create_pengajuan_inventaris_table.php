<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePengajuanInventarisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pengajuan_inventaris', function (Blueprint $table) {
            $table->string('no_pengajuan', 20)->primary();
            $table->date('tanggal');
            $table->string('nik', 20)->index('nik');
            $table->enum('urgensi', ['Cito', 'Emergensi', 'Biasa']);
            $table->string('latar_belakang', 200);
            $table->string('nama_barang', 70);
            $table->string('spesifikasi', 200);
            $table->double('jumlah');
            $table->double('harga');
            $table->double('total');
            $table->string('keterangan', 70);
            $table->string('nik_pj', 20)->index('nik_pj');
            $table->enum('status', ['Proses Pengajuan', 'Disetujui', 'Ditolak']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pengajuan_inventaris');
    }
}
