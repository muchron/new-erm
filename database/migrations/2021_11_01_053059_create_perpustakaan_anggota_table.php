<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePerpustakaanAnggotaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('perpustakaan_anggota', function (Blueprint $table) {
            $table->string('no_anggota', 10)->primary();
            $table->string('nama_anggota', 40)->nullable();
            $table->string('tmp_lahir', 20)->nullable();
            $table->date('tgl_lahir')->nullable();
            $table->enum('j_kel', ['L', 'P'])->nullable();
            $table->string('alamat', 70)->nullable();
            $table->string('no_telp', 13)->nullable();
            $table->string('email', 25)->nullable();
            $table->date('tgl_gabung')->nullable();
            $table->date('masa_berlaku')->nullable();
            $table->enum('jenis_anggota', ['Pasien', 'Pegawai', 'Umum']);
            $table->string('nomer_id', 20);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('perpustakaan_anggota');
    }
}
