<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePengajuanBarangMedisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pengajuan_barang_medis', function (Blueprint $table) {
            $table->string('no_pengajuan', 20)->primary();
            $table->string('nip', 20)->nullable()->index('nip');
            $table->date('tanggal')->nullable();
            $table->enum('status', ['Proses Pengajuan', 'Disetujui', 'Ditolak'])->nullable();
            $table->string('keterangan', 150)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pengajuan_barang_medis');
    }
}
