<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSetHargaKamarTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('set_harga_kamar', function (Blueprint $table) {
            $table->string('kd_kamar', 15);
            $table->char('kd_pj', 3)->index('kd_pj');
            $table->double('tarif')->index('tarif');

            $table->primary(['kd_kamar', 'kd_pj']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('set_harga_kamar');
    }
}
