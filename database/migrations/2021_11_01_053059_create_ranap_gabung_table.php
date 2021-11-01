<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRanapGabungTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ranap_gabung', function (Blueprint $table) {
            $table->string('no_rawat', 17)->index('no_rawat');
            $table->string('no_rawat2', 17)->index('no_rawat2');

            $table->primary(['no_rawat', 'no_rawat2']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ranap_gabung');
    }
}
