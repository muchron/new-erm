<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePnmTnjBulananTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pnm_tnj_bulanan', function (Blueprint $table) {
            $table->integer('id');
            $table->integer('id_tnj')->index('id_tnj');

            $table->primary(['id', 'id_tnj']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pnm_tnj_bulanan');
    }
}
