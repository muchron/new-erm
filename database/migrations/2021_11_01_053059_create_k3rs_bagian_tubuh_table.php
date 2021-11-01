<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateK3rsBagianTubuhTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('k3rs_bagian_tubuh', function (Blueprint $table) {
            $table->string('kode_bagian', 5)->primary();
            $table->string('bagian_tubuh', 150)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('k3rs_bagian_tubuh');
    }
}
