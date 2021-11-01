<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePerpustakaanInventarisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('perpustakaan_inventaris', function (Blueprint $table) {
            $table->string('no_inventaris', 20)->default('')->primary();
            $table->string('kode_buku', 10)->nullable()->index('kode_buku');
            $table->enum('asal_buku', ['Beli', 'Bantuan', 'Hibah', '-'])->nullable();
            $table->date('tgl_pengadaan')->nullable();
            $table->double('harga')->nullable();
            $table->enum('status_buku', ['Ada', 'Rusak', 'Hilang', 'Dipinjam', '-'])->nullable();
            $table->char('kd_ruang', 5)->nullable()->index('kd_ruang');
            $table->char('no_rak', 3)->nullable();
            $table->char('no_box', 3)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('perpustakaan_inventaris');
    }
}
