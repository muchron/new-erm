<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSetHargaObatTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('set_harga_obat', function (Blueprint $table) {
            $table->enum('setharga', ['Umum', 'Per Jenis', 'Per Barang']);
            $table->enum('hargadasar', ['Harga Beli', 'Harga Diskon']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('set_harga_obat');
    }
}
