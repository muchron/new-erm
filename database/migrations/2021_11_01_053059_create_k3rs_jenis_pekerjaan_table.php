<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateK3rsJenisPekerjaanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('k3rs_jenis_pekerjaan', function (Blueprint $table) {
            $table->string('kode_pekerjaan', 5)->primary();
            $table->string('jenis_pekerjaan', 150)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('k3rs_jenis_pekerjaan');
    }
}
