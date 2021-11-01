<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSetPjlabTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('set_pjlab', function (Blueprint $table) {
            $table->string('kd_dokterlab', 20)->index('kd_dokterlab');
            $table->string('kd_dokterrad', 20)->index('kd_dokterrad');
            $table->string('kd_dokterhemodialisa', 20)->index('kd_dokterhemodialisa');
            $table->string('kd_dokterutd', 20)->nullable()->index('kd_dokterutd');

            $table->primary(['kd_dokterlab', 'kd_dokterrad', 'kd_dokterhemodialisa']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('set_pjlab');
    }
}
