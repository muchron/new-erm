<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTampjual1Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tampjual1', function (Blueprint $table) {
            $table->string('kode_brng', 15)->default('')->index('kode_brng');
            $table->string('nama_brng', 100)->nullable();
            $table->string('satuan', 10)->nullable();
            $table->double('h_jual')->nullable();
            $table->double('h_beli');
            $table->double('jumlah')->nullable();
            $table->double('subtotal')->nullable();
            $table->double('dis')->nullable();
            $table->double('bsr_dis')->nullable();
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
        Schema::dropIfExists('tampjual1');
    }
}
