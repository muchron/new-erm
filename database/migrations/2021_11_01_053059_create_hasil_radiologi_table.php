<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHasilRadiologiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hasil_radiologi', function (Blueprint $table) {
            $table->string('no_rawat', 17)->index('no_rawat');
            $table->date('tgl_periksa');
            $table->time('jam');
            $table->text('hasil');

            $table->primary(['no_rawat', 'tgl_periksa', 'jam']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hasil_radiologi');
    }
}
