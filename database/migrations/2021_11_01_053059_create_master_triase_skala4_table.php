<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMasterTriaseSkala4Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('master_triase_skala4', function (Blueprint $table) {
            $table->string('kode_pemeriksaan', 3)->index('kode_pemeriksaan');
            $table->string('kode_skala4', 3)->primary();
            $table->string('pengkajian_skala4', 150);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('master_triase_skala4');
    }
}
