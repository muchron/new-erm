<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBerkasPegawaiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('berkas_pegawai', function (Blueprint $table) {
            $table->string('nik', 20)->index('nik');
            $table->date('tgl_uploud');
            $table->string('kode_berkas', 10)->index('kode_berkas');
            $table->string('berkas', 500);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('berkas_pegawai');
    }
}
