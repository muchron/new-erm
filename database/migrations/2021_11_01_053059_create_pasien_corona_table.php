<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePasienCoronaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pasien_corona', function (Blueprint $table) {
            $table->string('no_pengenal', 20)->nullable();
            $table->string('no_rkm_medis', 15)->primary();
            $table->string('inisial', 15)->nullable();
            $table->string('nama_lengkap', 40)->nullable();
            $table->date('tgl_masuk')->nullable();
            $table->string('kode_jk', 1)->nullable();
            $table->string('nama_jk', 10)->nullable();
            $table->date('tgl_lahir')->nullable();
            $table->string('kode_kewarganegaraan', 5)->nullable();
            $table->string('nama_kewarganegaraan', 25)->nullable();
            $table->string('kode_penularan', 5)->nullable();
            $table->string('sumber_penularan', 40)->nullable();
            $table->string('kd_kelurahan', 15)->nullable();
            $table->string('nm_kelurahan', 20)->nullable();
            $table->string('kd_kecamatan', 10)->nullable();
            $table->string('nm_kecamatan', 20)->nullable();
            $table->string('kd_kabupaten', 6)->nullable();
            $table->string('nm_kabupaten', 20)->nullable();
            $table->string('kd_propinsi', 3)->nullable();
            $table->string('nm_propinsi', 20)->nullable();
            $table->date('tgl_keluar')->nullable();
            $table->string('kode_statuskeluar', 5)->nullable();
            $table->string('nama_statuskeluar', 40)->nullable();
            $table->dateTime('tgl_lapor')->nullable();
            $table->string('kode_statusrawat', 5)->nullable();
            $table->string('nama_statusrawat', 40)->nullable();
            $table->string('kode_statusisolasi', 5)->nullable();
            $table->string('nama_statusisolasi', 100)->nullable();
            $table->string('email', 50)->nullable();
            $table->string('notelp', 40)->nullable();
            $table->string('sebab_kematian', 60)->nullable();
            $table->string('kode_jenis_pasien', 5);
            $table->string('nama_jenis_pasien', 40);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pasien_corona');
    }
}
