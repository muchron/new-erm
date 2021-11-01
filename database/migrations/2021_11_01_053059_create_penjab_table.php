<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePenjabTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('penjab', function (Blueprint $table) {
            $table->char('kd_pj', 3)->primary();
            $table->string('png_jawab', 30);
            $table->string('nama_perusahaan', 60);
            $table->string('alamat_asuransi', 130);
            $table->string('no_telp', 40);
            $table->string('attn', 60);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('penjab');
    }
}
