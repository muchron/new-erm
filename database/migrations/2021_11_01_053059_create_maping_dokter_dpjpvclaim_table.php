<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMapingDokterDpjpvclaimTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('maping_dokter_dpjpvclaim', function (Blueprint $table) {
            $table->string('kd_dokter', 20)->primary();
            $table->string('kd_dokter_bpjs', 20)->nullable();
            $table->string('nm_dokter_bpjs', 50)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('maping_dokter_dpjpvclaim');
    }
}
