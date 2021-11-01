<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetailNotaInapTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detail_nota_inap', function (Blueprint $table) {
            $table->string('no_rawat', 17)->nullable()->index('no_rawat');
            $table->string('nama_bayar', 50)->nullable()->index('nama_bayar');
            $table->double('besarppn')->nullable()->index('besarppn');
            $table->double('besar_bayar')->nullable()->index('besar_bayar');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detail_nota_inap');
    }
}
