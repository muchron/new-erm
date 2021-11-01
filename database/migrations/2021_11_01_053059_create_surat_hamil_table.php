<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSuratHamilTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('surat_hamil', function (Blueprint $table) {
            $table->string('no_surat', 20)->primary();
            $table->string('no_rawat', 17)->index('no_rawat');
            $table->date('tanggalperiksa');
            $table->enum('hasilperiksa', ['tidak ditemukan tanda-tanda kehamilan', 'ditemukan tanda-tanda kehamilan']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('surat_hamil');
    }
}
