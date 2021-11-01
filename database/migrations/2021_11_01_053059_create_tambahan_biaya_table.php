<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTambahanBiayaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tambahan_biaya', function (Blueprint $table) {
            $table->string('no_rawat', 17);
            $table->string('nama_biaya', 60);
            $table->double('besar_biaya');

            $table->primary(['no_rawat', 'nama_biaya']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tambahan_biaya');
    }
}
