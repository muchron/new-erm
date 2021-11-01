<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSetNotaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('set_nota', function (Blueprint $table) {
            $table->string('notaralan', 11);
            $table->string('kwitansiralan', 11);
            $table->string('nota1ranap', 11);
            $table->string('nota2ranap', 11);
            $table->string('kwitansiranap', 11);
            $table->string('notaapotek', 11);
            $table->string('notalabrad', 11);
            $table->string('notatoko', 11);
            $table->enum('cetaknotasimpanralan', ['Yes', 'No']);
            $table->enum('cetaknotasimpanranap', ['Yes', 'No']);
            $table->enum('rinciandokterralan', ['Yes', 'No']);
            $table->enum('rinciandokterranap', ['Yes', 'No']);
            $table->enum('centangdokterralan', ['Yes', 'No']);
            $table->enum('centangdokterranap', ['Yes', 'No']);
            $table->enum('tampilkan_administrasi_di_billingranap', ['Yes', 'No']);
            $table->enum('rincianoperasi', ['Yes', 'No'])->nullable();
            $table->enum('tampilkan_ppnobat_ralan', ['Yes', 'No'])->nullable();
            $table->enum('tampilkan_ppnobat_ranap', ['Yes', 'No'])->nullable();
            $table->enum('tampilkan_tombol_nota_ralan', ['Yes', 'No'])->nullable();
            $table->enum('tampilkan_tombol_nota_ranap', ['Yes', 'No'])->nullable();
            $table->enum('verifikasi_penjualan_di_kasir', ['Yes', 'No'])->nullable();
            $table->enum('verifikasi_penyerahan_darah_di_kasir', ['Yes', 'No'])->nullable();
            $table->enum('cetaknotasimpanpenjualan', ['Yes', 'No'])->nullable();
            $table->enum('tampilkan_tombol_nota_penjualan', ['Yes', 'No'])->nullable();
            $table->enum('centangobatralan', ['Yes', 'No'])->nullable();
            $table->enum('centangobatranap', ['Yes', 'No'])->nullable();
            $table->enum('cetaknotasimpantoko', ['Yes', 'No']);
            $table->enum('tampilkan_tombol_nota_toko', ['Yes', 'No']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('set_nota');
    }
}
