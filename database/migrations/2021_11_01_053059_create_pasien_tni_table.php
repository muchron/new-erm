<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePasienTniTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pasien_tni', function (Blueprint $table) {
            $table->string('no_rkm_medis', 15)->primary();
            $table->integer('golongan_tni')->index('golongan_tni');
            $table->integer('pangkat_tni')->index('pangkat_tni');
            $table->integer('satuan_tni')->index('satuan_tni');
            $table->integer('jabatan_tni')->index('jabatan');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pasien_tni');
    }
}
