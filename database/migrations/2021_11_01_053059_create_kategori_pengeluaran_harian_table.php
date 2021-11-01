<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKategoriPengeluaranHarianTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kategori_pengeluaran_harian', function (Blueprint $table) {
            $table->string('kode_kategori', 5)->primary();
            $table->string('nama_kategori', 40)->nullable();
            $table->string('kd_rek', 15)->nullable()->index('kd_rek');
            $table->string('kd_rek2', 15)->nullable()->index('kd_rek2');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kategori_pengeluaran_harian');
    }
}
