<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLogDukcapilAcehTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('log_dukcapil_aceh', function (Blueprint $table) {
            $table->string('no_ktp', 20);
            $table->dateTime('tanggal');
            $table->string('user', 30);

            $table->primary(['no_ktp', 'tanggal', 'user']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('log_dukcapil_aceh');
    }
}
