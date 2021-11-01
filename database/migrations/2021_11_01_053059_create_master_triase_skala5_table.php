<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMasterTriaseSkala5Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('master_triase_skala5', function (Blueprint $table) {
            $table->string('kode_pemeriksaan', 3)->index('kode_pemeriksaan');
            $table->string('kode_skala5', 3)->primary();
            $table->string('pengkajian_skala5', 150);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('master_triase_skala5');
    }
}
