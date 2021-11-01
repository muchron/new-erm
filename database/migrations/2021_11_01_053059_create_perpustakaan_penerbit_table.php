<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePerpustakaanPenerbitTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('perpustakaan_penerbit', function (Blueprint $table) {
            $table->string('kode_penerbit', 10)->primary();
            $table->string('nama_penerbit', 40)->nullable();
            $table->string('alamat_penerbit', 70)->nullable();
            $table->string('no_telp', 13)->nullable();
            $table->string('email', 25)->nullable();
            $table->string('website_penerbit', 30)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('perpustakaan_penerbit');
    }
}
