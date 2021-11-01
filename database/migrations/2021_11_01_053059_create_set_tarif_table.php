<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSetTarifTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('set_tarif', function (Blueprint $table) {
            $table->enum('poli_ralan', ['Yes', 'No']);
            $table->enum('cara_bayar_ralan', ['Yes', 'No']);
            $table->enum('ruang_ranap', ['Yes', 'No']);
            $table->enum('cara_bayar_ranap', ['Yes', 'No']);
            $table->enum('cara_bayar_lab', ['Yes', 'No']);
            $table->enum('cara_bayar_radiologi', ['Yes', 'No']);
            $table->enum('cara_bayar_operasi', ['Yes', 'No'])->nullable();
            $table->enum('kelas_ranap', ['Yes', 'No']);
            $table->enum('kelas_lab', ['Yes', 'No']);
            $table->enum('kelas_radiologi', ['Yes', 'No']);
            $table->enum('kelas_operasi', ['Yes', 'No']);

            $table->index(['poli_ralan', 'cara_bayar_ralan', 'ruang_ranap', 'cara_bayar_ranap', 'cara_bayar_lab'], 'poli_ralan');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('set_tarif');
    }
}
