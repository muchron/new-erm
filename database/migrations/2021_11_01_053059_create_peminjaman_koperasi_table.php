<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePeminjamanKoperasiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('peminjaman_koperasi', function (Blueprint $table) {
            $table->integer('id');
            $table->date('tanggal');
            $table->double('pinjaman');
            $table->integer('banyak_angsur');
            $table->double('pokok');
            $table->double('jasa');
            $table->enum('status', ['Lunas', 'Belum Lunas']);

            $table->primary(['id', 'tanggal']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('peminjaman_koperasi');
    }
}
