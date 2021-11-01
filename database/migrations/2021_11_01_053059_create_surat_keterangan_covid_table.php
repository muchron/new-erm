<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSuratKeteranganCovidTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('surat_keterangan_covid', function (Blueprint $table) {
            $table->string('no_surat', 17)->primary();
            $table->string('no_rawat', 17)->nullable()->index('no_rawat');
            $table->string('kd_dokter', 20)->nullable()->index('kd_dokter');
            $table->string('nip', 20)->nullable()->index('nip');
            $table->enum('igm', ['REAKTIF', 'NON REAKTIF'])->nullable();
            $table->enum('igg', ['REAKTIF', 'NON REAKTIF'])->nullable();
            $table->enum('sehat', ['X', 'V'])->nullable();
            $table->enum('tidaksehat', ['X', 'V'])->nullable();
            $table->date('berlakumulai')->nullable();
            $table->date('berlakuselsai')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('surat_keterangan_covid');
    }
}
