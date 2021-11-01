<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePasienBayiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pasien_bayi', function (Blueprint $table) {
            $table->string('no_rkm_medis', 15)->primary();
            $table->string('umur_ibu', 8)->index('umur_ibu');
            $table->string('nama_ayah', 50);
            $table->string('umur_ayah', 8)->index('umur_ayah');
            $table->string('berat_badan', 10)->index('berat_badan');
            $table->string('panjang_badan', 10)->index('panjang_badan');
            $table->string('lingkar_kepala', 10)->index('lingkar_kepala');
            $table->string('proses_lahir', 60)->index('proses_lahir');
            $table->char('anakke', 2)->index('anakke');
            $table->time('jam_lahir')->index('jam_lahir');
            $table->string('keterangan', 50)->index('keterangan');
            $table->string('diagnosa', 60)->nullable();
            $table->string('penyulit_kehamilan', 60)->nullable();
            $table->string('ketuban', 60)->nullable();
            $table->string('lingkar_perut', 10)->nullable();
            $table->string('lingkar_dada', 10)->nullable();
            $table->string('penolong', 20)->nullable()->index('penolong');
            $table->string('no_skl', 30)->nullable()->unique('no_skl');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pasien_bayi');
    }
}
