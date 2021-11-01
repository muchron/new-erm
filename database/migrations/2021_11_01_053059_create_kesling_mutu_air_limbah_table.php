<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKeslingMutuAirLimbahTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kesling_mutu_air_limbah', function (Blueprint $table) {
            $table->string('nip', 20);
            $table->dateTime('tanggal');
            $table->double('meteran')->nullable();
            $table->double('jumlahharian')->nullable();
            $table->double('ph')->nullable();
            $table->double('suhu')->nullable();

            $table->primary(['nip', 'tanggal']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kesling_mutu_air_limbah');
    }
}
