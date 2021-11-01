<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTokobarangTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tokobarang', function (Blueprint $table) {
            $table->string('kode_brng', 10)->primary();
            $table->string('nama_brng', 80)->index('nama_brng');
            $table->char('kode_sat', 4)->index('kode_sat');
            $table->char('jenis', 5)->nullable()->index('jenis');
            $table->double('stok');
            $table->double('dasar');
            $table->double('h_beli');
            $table->double('distributor');
            $table->double('grosir');
            $table->double('retail');
            $table->enum('status', ['0', '1']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tokobarang');
    }
}
