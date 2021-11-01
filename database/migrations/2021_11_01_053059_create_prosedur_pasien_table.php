<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProsedurPasienTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prosedur_pasien', function (Blueprint $table) {
            $table->string('no_rawat', 17);
            $table->string('kode', 8)->index('kode');
            $table->enum('status', ['Ralan', 'Ranap']);
            $table->tinyInteger('prioritas');

            $table->primary(['no_rawat', 'kode', 'status']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('prosedur_pasien');
    }
}
