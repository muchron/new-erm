<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMapingTindakanPcareTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('maping_tindakan_pcare', function (Blueprint $table) {
            $table->string('kd_jenis_prw', 15)->primary();
            $table->string('kd_tindakan_pcare', 15)->nullable();
            $table->string('nm_tindakan_pcare', 100)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('maping_tindakan_pcare');
    }
}
