<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegPeriksaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reg_periksa', function (Blueprint $table) {
            $table->string('no_reg', 8)->nullable();
            $table->string('no_rawat', 17)->primary();
            $table->date('tgl_registrasi')->nullable();
            $table->time('jam_reg')->nullable();
            $table->string('kd_dokter', 20)->nullable()->index('kd_dokter');
            $table->string('no_rkm_medis', 15)->nullable()->index('no_rkm_medis');
            $table->char('kd_poli', 5)->nullable()->index('kd_poli');
            $table->string('p_jawab', 100)->nullable();
            $table->string('almt_pj', 200)->nullable();
            $table->string('hubunganpj', 20)->nullable();
            $table->double('biaya_reg')->nullable();
            $table->enum('stts', ['Belum', 'Sudah', 'Batal', 'Berkas Diterima', 'Dirujuk', 'Meninggal', 'Dirawat', 'Pulang Paksa'])->nullable();
            $table->enum('stts_daftar', ['-', 'Lama', 'Baru']);
            $table->enum('status_lanjut', ['Ralan', 'Ranap'])->index('status_lanjut');
            $table->char('kd_pj', 3)->index('kd_pj');
            $table->integer('umurdaftar')->nullable();
            $table->enum('sttsumur', ['Th', 'Bl', 'Hr'])->nullable();
            $table->enum('status_bayar', ['Sudah Bayar', 'Belum Bayar'])->index('status_bayar');
            $table->enum('status_poli', ['Lama', 'Baru']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reg_periksa');
    }
}
