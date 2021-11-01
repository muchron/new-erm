<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSetServiceRanapPiutangTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('set_service_ranap_piutang', function (Blueprint $table) {
            $table->string('nama_service', 100)->default('')->primary();
            $table->double('besar')->nullable();
            $table->enum('laborat', ['Yes', 'No'])->nullable();
            $table->enum('radiologi', ['Yes', 'No'])->nullable();
            $table->enum('operasi', ['Yes', 'No'])->nullable();
            $table->enum('obat', ['Yes', 'No'])->nullable();
            $table->enum('ranap_dokter', ['Yes', 'No'])->nullable();
            $table->enum('ranap_paramedis', ['Yes', 'No'])->nullable();
            $table->enum('ralan_dokter', ['Yes', 'No'])->nullable();
            $table->enum('ralan_paramedis', ['Yes', 'No'])->nullable();
            $table->enum('tambahan', ['Yes', 'No'])->nullable();
            $table->enum('potongan', ['Yes', 'No'])->nullable();
            $table->enum('kamar', ['Yes', 'No'])->nullable();
            $table->enum('registrasi', ['Yes', 'No'])->nullable();
            $table->enum('harian', ['Yes', 'No'])->nullable();
            $table->enum('retur_Obat', ['Yes', 'No'])->nullable();
            $table->enum('resep_Pulang', ['Yes', 'No'])->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('set_service_ranap_piutang');
    }
}
