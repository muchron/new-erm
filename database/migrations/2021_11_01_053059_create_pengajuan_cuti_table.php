<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePengajuanCutiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pengajuan_cuti', function (Blueprint $table) {
            $table->string('no_pengajuan', 17)->primary();
            $table->date('tanggal');
            $table->date('tanggal_awal');
            $table->date('tanggal_akhir');
            $table->string('nik', 20)->index('nik');
            $table->enum('urgensi', ['Tahunan', 'Besar', 'Sakit', 'Bersalin', 'Alasan Penting', 'Keterangan Lainnya']);
            $table->string('alamat', 100);
            $table->integer('jumlah');
            $table->string('kepentingan', 70);
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
        Schema::dropIfExists('pengajuan_cuti');
    }
}
