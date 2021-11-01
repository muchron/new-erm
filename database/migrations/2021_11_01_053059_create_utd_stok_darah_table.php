<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUtdStokDarahTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('utd_stok_darah', function (Blueprint $table) {
            $table->string('no_kantong', 20)->default('')->primary();
            $table->string('kode_komponen', 5)->nullable()->index('kode_komponen');
            $table->enum('golongan_darah', ['A', 'AB', 'B', 'O'])->nullable();
            $table->enum('resus', ['(-)', '(+)'])->nullable();
            $table->date('tanggal_aftap')->nullable();
            $table->date('tanggal_kadaluarsa')->nullable();
            $table->enum('asal_darah', ['Hibah', 'Beli', 'Produksi Sendiri'])->nullable();
            $table->enum('status', ['Ada', 'Diambil', 'Dimusnahkan'])->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('utd_stok_darah');
    }
}
