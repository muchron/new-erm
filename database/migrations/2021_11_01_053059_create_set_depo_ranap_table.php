<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSetDepoRanapTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('set_depo_ranap', function (Blueprint $table) {
            $table->char('kd_bangsal', 5);
            $table->char('kd_depo', 5)->index('kd_depo');

            $table->primary(['kd_bangsal', 'kd_depo']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('set_depo_ranap');
    }
}
