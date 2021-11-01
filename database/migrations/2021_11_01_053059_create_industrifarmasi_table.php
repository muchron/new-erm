<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIndustrifarmasiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('industrifarmasi', function (Blueprint $table) {
            $table->char('kode_industri', 5)->default('')->primary();
            $table->string('nama_industri', 50)->nullable()->index('nama_industri');
            $table->string('alamat', 50)->nullable()->index('alamat');
            $table->string('kota', 20)->nullable()->index('kota');
            $table->string('no_telp', 20)->nullable()->index('no_telp');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('industrifarmasi');
    }
}
