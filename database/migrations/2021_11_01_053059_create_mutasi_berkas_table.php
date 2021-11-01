<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMutasiBerkasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mutasi_berkas', function (Blueprint $table) {
            $table->string('no_rawat', 17)->primary();
            $table->enum('status', ['Sudah Dikirim', 'Sudah Diterima', 'Sudah Kembali', 'Tidak Ada', 'Masuk Ranap'])->nullable();
            $table->dateTime('dikirim')->nullable();
            $table->dateTime('diterima')->nullable();
            $table->dateTime('kembali')->nullable();
            $table->dateTime('tidakada')->nullable();
            $table->dateTime('ranap');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mutasi_berkas');
    }
}
