<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSetResumeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('set_resume', function (Blueprint $table) {
            $table->year('tahun');
            $table->tinyInteger('bulan');
            $table->double('pendapatan_resume');
            $table->double('persen_rs');
            $table->double('bagian_rs');
            $table->double('persen_kry');
            $table->double('bagian_kry');

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
        Schema::dropIfExists('set_resume');
    }
}
