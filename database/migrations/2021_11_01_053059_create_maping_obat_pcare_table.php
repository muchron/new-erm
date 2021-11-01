<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMapingObatPcareTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('maping_obat_pcare', function (Blueprint $table) {
            $table->string('kode_brng', 15)->primary();
            $table->string('kode_brng_pcare', 15);
            $table->string('nama_brng_pcare', 80)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('maping_obat_pcare');
    }
}
