<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePemasukanLainTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pemasukan_lain', function (Blueprint $table) {
            $table->string('no_masuk', 15)->primary();
            $table->dateTime('tanggal')->default('0000-00-00 00:00:00');
            $table->string('kode_kategori', 5)->default('')->index('pemasukan_lain_ibfk_2');
            $table->double('besar')->nullable();
            $table->string('nip', 20)->nullable()->index('pemasukan_lain_ibfk_1');
            $table->string('keterangan', 50)->nullable();
            $table->string('keperluan', 70)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pemasukan_lain');
    }
}
