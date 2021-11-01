<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKeslingPemakaianAirTanahTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kesling_pemakaian_air_tanah', function (Blueprint $table) {
            $table->string('nip', 20);
            $table->dateTime('tanggal');
            $table->double('meteran')->nullable();
            $table->double('jumlahharian')->nullable();
            $table->string('keterangan', 50)->nullable();

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
        Schema::dropIfExists('kesling_pemakaian_air_tanah');
    }
}
