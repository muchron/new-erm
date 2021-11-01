<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSuratSkbnTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('surat_skbn', function (Blueprint $table) {
            $table->string('no_surat', 25)->primary();
            $table->string('no_rawat', 17)->nullable()->default('')->index('no_rawat');
            $table->date('tanggalsurat')->nullable();
            $table->enum('kategori', ['UMUM', 'POLRI', 'TNI'])->nullable()->default('UMUM');
            $table->string('kd_dokter', 20)->nullable()->default('')->index('kd_dokter');
            $table->string('keperluan', 50)->nullable()->default('');
            $table->enum('opiat', ['NEGATIF', 'POSITIF'])->nullable()->default('NEGATIF');
            $table->enum('ganja', ['NEGATIF', 'POSITIF'])->nullable()->default('NEGATIF');
            $table->enum('amphetamin', ['NEGATIF', 'POSITIF'])->nullable()->default('NEGATIF');
            $table->enum('methamphetamin', ['NEGATIF', 'POSITIF'])->nullable()->default('NEGATIF');
            $table->enum('benzodiazepin', ['NEGATIF', 'POSITIF'])->nullable()->default('NEGATIF');
            $table->enum('cocain', ['NEGATIF', 'POSITIF'])->nullable()->default('NEGATIF');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('surat_skbn');
    }
}
