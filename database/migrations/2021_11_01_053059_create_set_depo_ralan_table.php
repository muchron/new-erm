<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSetDepoRalanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('set_depo_ralan', function (Blueprint $table) {
            $table->char('kd_poli', 5);
            $table->char('kd_bangsal', 5)->index('kd_bangsal');

            $table->primary(['kd_poli', 'kd_bangsal']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('set_depo_ralan');
    }
}
