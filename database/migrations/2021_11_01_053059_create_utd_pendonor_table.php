<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUtdPendonorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('utd_pendonor', function (Blueprint $table) {
            $table->string('no_pendonor', 15)->primary();
            $table->string('nama', 40);
            $table->string('no_ktp', 20);
            $table->enum('jk', ['L', 'P']);
            $table->string('tmp_lahir', 15);
            $table->date('tgl_lahir');
            $table->string('alamat', 100);
            $table->integer('kd_kel')->index('kd_kel');
            $table->integer('kd_kec')->index('kd_kec');
            $table->integer('kd_kab')->index('kd_kab');
            $table->integer('kd_prop')->index('kd_prop');
            $table->enum('golongan_darah', ['A', 'AB', 'B', 'O']);
            $table->enum('resus', ['(-)', '(+)']);
            $table->string('no_telp', 40);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('utd_pendonor');
    }
}
