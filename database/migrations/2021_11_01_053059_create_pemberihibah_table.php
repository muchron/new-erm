<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePemberihibahTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pemberihibah', function (Blueprint $table) {
            $table->char('kode_pemberi', 5)->primary();
            $table->string('nama_pemberi', 50)->nullable()->index('nama_suplier');
            $table->string('alamat', 50)->nullable()->index('alamat');
            $table->string('kota', 20)->nullable()->index('kota');
            $table->string('no_telp', 13)->nullable()->index('no_telp');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pemberihibah');
    }
}
