<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKategoriPenyakitTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kategori_penyakit', function (Blueprint $table) {
            $table->string('kd_ktg', 8)->primary();
            $table->string('nm_kategori', 30)->nullable()->index('nm_kategori');
            $table->string('ciri_umum', 200)->nullable()->index('ciri_umum');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kategori_penyakit');
    }
}
