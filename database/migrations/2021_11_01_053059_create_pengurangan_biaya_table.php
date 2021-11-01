<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePenguranganBiayaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pengurangan_biaya', function (Blueprint $table) {
            $table->string('no_rawat', 17)->default('');
            $table->string('nama_pengurangan', 60);
            $table->double('besar_pengurangan')->nullable();

            $table->primary(['no_rawat', 'nama_pengurangan']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pengurangan_biaya');
    }
}
