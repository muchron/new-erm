<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInhealthTindakanRalanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inhealth_tindakan_ralan', function (Blueprint $table) {
            $table->string('kd_jenis_prw', 15)->primary();
            $table->string('kd_inhealth', 20)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('inhealth_tindakan_ralan');
    }
}
