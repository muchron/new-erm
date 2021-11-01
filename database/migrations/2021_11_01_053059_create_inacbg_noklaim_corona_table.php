<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInacbgNoklaimCoronaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inacbg_noklaim_corona', function (Blueprint $table) {
            $table->string('no_rawat', 17)->primary();
            $table->string('no_klaim', 40)->nullable()->unique('no_klaim');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('inacbg_noklaim_corona');
    }
}
