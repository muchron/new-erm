<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePasienPolriTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pasien_polri', function (Blueprint $table) {
            $table->string('no_rkm_medis', 15)->primary();
            $table->integer('golongan_polri')->index('golongan_polri');
            $table->integer('pangkat_polri')->index('pangkat_polri');
            $table->integer('satuan_polri')->index('satuan_polri');
            $table->integer('jabatan_polri')->index('jabatan');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pasien_polri');
    }
}
