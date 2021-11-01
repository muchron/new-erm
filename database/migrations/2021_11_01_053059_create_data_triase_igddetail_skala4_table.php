<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDataTriaseIgddetailSkala4Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_triase_igddetail_skala4', function (Blueprint $table) {
            $table->string('no_rawat', 17);
            $table->string('kode_skala4', 3)->index('kode_skala4');

            $table->primary(['no_rawat', 'kode_skala4']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('data_triase_igddetail_skala4');
    }
}
