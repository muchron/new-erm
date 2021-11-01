<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInacbgGroupingStage1Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inacbg_grouping_stage1', function (Blueprint $table) {
            $table->string('no_sep', 40)->primary();
            $table->string('code_cbg', 10)->nullable();
            $table->string('deskripsi', 200)->nullable();
            $table->double('tarif')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('inacbg_grouping_stage1');
    }
}
