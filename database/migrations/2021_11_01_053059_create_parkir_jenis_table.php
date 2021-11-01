<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateParkirJenisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('parkir_jenis', function (Blueprint $table) {
            $table->char('kd_parkir', 5)->primary();
            $table->string('jns_parkir', 50);
            $table->double('biaya');
            $table->enum('jenis', ['Harian', 'Jam']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('parkir_jenis');
    }
}
