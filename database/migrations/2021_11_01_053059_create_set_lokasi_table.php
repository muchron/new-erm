<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSetLokasiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('set_lokasi', function (Blueprint $table) {
            $table->char('kd_bangsal', 5)->index('kd_bangsal');
            $table->enum('asal_stok', ['Gunakan Stok Utama Obat', 'Gunakan Stok Bangsal']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('set_lokasi');
    }
}
