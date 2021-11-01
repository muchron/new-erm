<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSuratMasukKendaliTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('surat_masuk_kendali', function (Blueprint $table) {
            $table->string('no_kendali', 15)->primary();
            $table->string('kd_indeks', 5)->index('kd_indeks');
            $table->string('no_urut', 5)->index('no_surat');
            $table->date('tgl_selesai');
            $table->date('tgl_kembali');
            $table->string('kepada', 100);
            $table->enum('pengesahan', ['true', 'false']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('surat_masuk_kendali');
    }
}
