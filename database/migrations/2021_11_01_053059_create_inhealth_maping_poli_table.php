<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInhealthMapingPoliTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inhealth_maping_poli', function (Blueprint $table) {
            $table->string('kd_poli_rs', 5)->primary();
            $table->string('kd_poli_inhealth', 15)->nullable();
            $table->string('nm_poli_inhealth', 40)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('inhealth_maping_poli');
    }
}
