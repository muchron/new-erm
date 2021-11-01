<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSetInsentifTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('set_insentif', function (Blueprint $table) {
            $table->year('tahun');
            $table->tinyInteger('bulan');
            $table->double('pendapatan');
            $table->double('persen');
            $table->double('total_insentif');

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
        Schema::dropIfExists('set_insentif');
    }
}
