<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSaranKesanLabTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('saran_kesan_lab', function (Blueprint $table) {
            $table->string('no_rawat', 17);
            $table->date('tgl_periksa');
            $table->time('jam');
            $table->string('saran', 700)->nullable();
            $table->string('kesan', 700)->nullable();

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
        Schema::dropIfExists('saran_kesan_lab');
    }
}
