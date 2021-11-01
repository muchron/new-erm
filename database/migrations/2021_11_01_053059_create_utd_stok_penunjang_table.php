<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUtdStokPenunjangTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('utd_stok_penunjang', function (Blueprint $table) {
            $table->string('kode_brng', 15)->default('')->primary();
            $table->double('stok')->nullable();
            $table->double('hargaterakhir')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('utd_stok_penunjang');
    }
}
