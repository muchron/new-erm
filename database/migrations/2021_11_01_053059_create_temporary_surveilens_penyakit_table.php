<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTemporarySurveilensPenyakitTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('temporary_surveilens_penyakit', function (Blueprint $table) {
            $table->string('kd_penyakit', 10)->index('kd_penyakit');
            $table->string('kd_penyakit2', 10)->index('kd_penyakit2');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('temporary_surveilens_penyakit');
    }
}
