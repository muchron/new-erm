<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMapingPoliBpjsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('maping_poli_bpjs', function (Blueprint $table) {
            $table->string('kd_poli_rs', 5)->primary();
            $table->string('kd_poli_bpjs', 15);
            $table->string('nm_poli_bpjs', 40);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('maping_poli_bpjs');
    }
}
