<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSuratMasukTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('surat_masuk', function (Blueprint $table) {
            $table->string('no_urut', 15)->primary();
            $table->string('no_surat', 50);
            $table->string('asal', 300);
            $table->string('tujuan', 300);
            $table->date('tgl_surat');
            $table->string('perihal', 300);
            $table->date('tgl_terima');
            $table->string('kd_lemari', 5)->index('kd_lemari');
            $table->string('kd_rak', 5)->index('kd_rak');
            $table->string('kd_map', 5)->index('kd_map');
            $table->string('kd_ruang', 5)->index('kd_ruang');
            $table->string('kd_sifat', 5)->index('kd_sifat');
            $table->string('lampiran', 300);
            $table->string('tembusan', 300);
            $table->date('tgl_deadline_balas');
            $table->string('kd_balas', 5)->index('kd_balas');
            $table->string('keterangan', 300);
            $table->string('kd_status', 5)->index('kd_status');
            $table->string('kd_klasifikasi', 5)->index('kd_klasifikasi');
            $table->string('file_url', 500);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('surat_masuk');
    }
}
