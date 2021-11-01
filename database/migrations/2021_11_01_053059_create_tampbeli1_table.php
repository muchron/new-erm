<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTampbeli1Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tampbeli1', function (Blueprint $table) {
            $table->string('kode_brng', 15)->default('')->index('kode_brng');
            $table->string('nama_brng', 100)->nullable();
            $table->string('satuan', 10)->nullable();
            $table->string('satuan_stok', 10)->nullable();
            $table->double('h_beli')->nullable();
            $table->double('jumlah')->nullable();
            $table->double('jumlah_stok')->nullable();
            $table->double('total')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tampbeli1');
    }
}
