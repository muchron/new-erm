<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUtdKomponenDarahTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('utd_komponen_darah', function (Blueprint $table) {
            $table->string('kode', 5)->primary();
            $table->string('nama', 70)->nullable();
            $table->smallInteger('lama')->nullable();
            $table->double('jasa_sarana')->nullable();
            $table->double('paket_bhp')->nullable();
            $table->double('kso')->nullable();
            $table->double('manajemen')->nullable();
            $table->double('total')->nullable();
            $table->double('pembatalan')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('utd_komponen_darah');
    }
}
