<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIpsrsbarangTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ipsrsbarang', function (Blueprint $table) {
            $table->string('kode_brng', 15)->primary();
            $table->string('nama_brng', 80)->index('nama_brng');
            $table->char('kode_sat', 4)->index('kode_sat');
            $table->char('jenis', 5)->nullable()->index('jenis');
            $table->double('stok')->index('stok');
            $table->double('harga')->index('harga');
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
        Schema::dropIfExists('ipsrsbarang');
    }
}
