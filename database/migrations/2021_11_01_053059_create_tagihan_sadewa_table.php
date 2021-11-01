<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTagihanSadewaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tagihan_sadewa', function (Blueprint $table) {
            $table->string('no_nota', 17)->primary();
            $table->string('no_rkm_medis', 15);
            $table->string('nama_pasien', 60);
            $table->string('alamat', 200);
            $table->dateTime('tgl_bayar');
            $table->enum('jenis_bayar', ['Pelunasan', 'Deposit', 'Cicilan', 'Uang Muka']);
            $table->double('jumlah_tagihan');
            $table->double('jumlah_bayar');
            $table->enum('status', ['Sudah', 'Belum']);
            $table->string('petugas', 20)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tagihan_sadewa');
    }
}
