<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSukuBangsaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('suku_bangsa', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('nama_suku_bangsa', 30)->nullable()->unique('nama_suku_bangsa');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('suku_bangsa');
    }
}
