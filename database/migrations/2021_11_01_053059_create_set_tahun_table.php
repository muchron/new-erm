<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSetTahunTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('set_tahun', function (Blueprint $table) {
            $table->year('tahun');
            $table->tinyInteger('bulan');
            $table->integer('jmlhr');
            $table->integer('jmllbr');
            $table->integer('normal');

            $table->primary(['tahun', 'bulan']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('set_tahun');
    }
}
