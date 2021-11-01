<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetailNotaJalanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detail_nota_jalan', function (Blueprint $table) {
            $table->string('no_rawat', 17)->index('no_rawat');
            $table->string('nama_bayar', 50)->index('nama_bayar');
            $table->double('besarppn')->nullable()->index('besarppn');
            $table->double('besar_bayar')->nullable()->index('besar_bayar');

            $table->primary(['no_rawat', 'nama_bayar']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detail_nota_jalan');
    }
}
