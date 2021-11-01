<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRawatjalanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rawatjalan', function (Blueprint $table) {
            $table->dateTime('tgl');
            $table->integer('id')->index('id');
            $table->integer('tnd')->index('tnd');
            $table->double('jm');
            $table->string('nm_pasien', 30);
            $table->string('kamar', 20);
            $table->string('diagnosa', 50);
            $table->integer('jmlh');

            $table->primary(['tgl', 'id', 'tnd']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rawatjalan');
    }
}
