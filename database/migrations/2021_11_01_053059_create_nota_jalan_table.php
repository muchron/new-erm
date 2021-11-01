<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNotaJalanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nota_jalan', function (Blueprint $table) {
            $table->string('no_rawat', 17)->default('')->primary();
            $table->string('no_nota', 17)->nullable()->unique('no_nota');
            $table->date('tanggal')->nullable()->index('tanggal');
            $table->time('jam')->nullable()->index('jam');
            $table->double('Jasa_Medik_Dokter_Tindakan_Ralan')->nullable()->index('Jasa_Medik_Dokter_Tindakan_Ralan');
            $table->double('Jasa_Medik_Paramedis_Tindakan_Ralan')->nullable()->index('Jasa_Medik_Paramedis_Tindakan_Ralan');
            $table->double('KSO_Tindakan_Ralan')->nullable();
            $table->double('Jasa_Medik_Dokter_Laborat_Ralan')->nullable();
            $table->double('Jasa_Medik_Petugas_Laborat_Ralan')->nullable();
            $table->double('Kso_Laborat_Ralan')->nullable();
            $table->double('Persediaan_Laborat_Rawat_Jalan')->nullable();
            $table->double('Jasa_Medik_Dokter_Radiologi_Ralan')->nullable();
            $table->double('Jasa_Medik_Petugas_Radiologi_Ralan')->nullable();
            $table->double('Kso_Radiologi_Ralan')->nullable();
            $table->double('Persediaan_Radiologi_Rawat_Jalan')->nullable();
            $table->double('Obat_Rawat_Jalan')->nullable();
            $table->double('Jasa_Medik_Dokter_Operasi_Ralan')->nullable();
            $table->double('Jasa_Medik_Paramedis_Operasi_Ralan')->nullable();
            $table->double('Obat_Operasi_Ralan')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('nota_jalan');
    }
}
