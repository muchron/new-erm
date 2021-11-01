<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSetAkunRalanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('set_akun_ralan', function (Blueprint $table) {
            $table->string('Tindakan_Ralan', 15)->nullable()->index('Tindakan_Ralan');
            $table->string('Beban_Jasa_Medik_Dokter_Tindakan_Ralan', 15)->nullable()->index('Beban_Jasa_Medik_Dokter_Tindakan_Ralan');
            $table->string('Utang_Jasa_Medik_Dokter_Tindakan_Ralan', 15)->nullable()->index('Utang_Jasa_Medik_Dokter_Tindakan_Ralan');
            $table->string('Beban_Jasa_Medik_Paramedis_Tindakan_Ralan', 15)->nullable()->index('Beban_Jasa_Medik_Paramedis_Tindakan_Ralan');
            $table->string('Utang_Jasa_Medik_Paramedis_Tindakan_Ralan', 15)->nullable()->index('Utang_Jasa_Medik_Paramedis_Tindakan_Ralan');
            $table->string('Beban_KSO_Tindakan_Ralan', 15)->index('Beban_KSO_Tindakan_Ralan');
            $table->string('Utang_KSO_Tindakan_Ralan', 15)->index('Utang_KSO_Tindakan_Ralan');
            $table->string('Laborat_Ralan', 15)->nullable()->index('Laborat_Ralan');
            $table->string('Beban_Jasa_Medik_Dokter_Laborat_Ralan', 15)->nullable()->index('Beban_Jasa_Medik_Dokter_Laborat_Ralan');
            $table->string('Utang_Jasa_Medik_Dokter_Laborat_Ralan', 15)->nullable()->index('Utang_Jasa_Medik_Dokter_Laborat_Ralan');
            $table->string('Beban_Jasa_Medik_Petugas_Laborat_Ralan', 15)->nullable()->index('Beban_Jasa_Medik_Petugas_Laborat_Ralan');
            $table->string('Utang_Jasa_Medik_Petugas_Laborat_Ralan', 15)->nullable()->index('Utang_Jasa_Medik_Petugas_Laborat_Ralan');
            $table->string('Beban_Kso_Laborat_Ralan', 15)->nullable()->index('Beban_Kso_Laborat_Ralan');
            $table->string('Utang_Kso_Laborat_Ralan', 15)->nullable()->index('Utang_Kso_Laborat_Ralan');
            $table->string('HPP_Persediaan_Laborat_Rawat_Jalan', 15)->nullable()->index('HPP_Persediaan_Laborat_Rawat_Jalan');
            $table->string('Persediaan_BHP_Laborat_Rawat_Jalan', 15)->nullable()->index('Persediaan_BHP_Laborat_Rawat_Jalan');
            $table->string('Radiologi_Ralan', 15)->nullable()->index('Radiologi_Ralan');
            $table->string('Beban_Jasa_Medik_Dokter_Radiologi_Ralan', 15)->index('Beban_Jasa_Medik_Dokter_Radiologi_Ralan');
            $table->string('Utang_Jasa_Medik_Dokter_Radiologi_Ralan', 15)->index('Utang_Jasa_Medik_Dokter_Radiologi_Ralan');
            $table->string('Beban_Jasa_Medik_Petugas_Radiologi_Ralan', 15)->index('Beban_Jasa_Medik_Petugas_Radiologi_Ralan');
            $table->string('Utang_Jasa_Medik_Petugas_Radiologi_Ralan', 15)->index('Utang_Jasa_Medik_Petugas_Radiologi_Ralan');
            $table->string('Beban_Kso_Radiologi_Ralan', 15)->index('Beban_Kso_Radiologi_Ralan');
            $table->string('Utang_Kso_Radiologi_Ralan', 15)->index('Utang_Kso_Radiologi_Ralan');
            $table->string('HPP_Persediaan_Radiologi_Rawat_Jalan', 15)->index('HPP_Persediaan_Radiologi_Rawat_Jalan');
            $table->string('Persediaan_BHP_Radiologi_Rawat_Jalan', 15)->index('Persediaan_BHP_Radiologi_Rawat_Jalan');
            $table->string('Obat_Ralan', 15)->nullable()->index('Obat_Ralan');
            $table->string('HPP_Obat_Rawat_Jalan', 15)->index('HPP_Obat_Rawat_Jalan');
            $table->string('Persediaan_Obat_Rawat_Jalan', 15)->index('Persediaan_Obat_Rawat_Jalan');
            $table->string('Registrasi_Ralan', 15)->nullable()->index('Registrasi_Ralan');
            $table->string('Operasi_Ralan', 15)->nullable()->index('Operasi_Ralan');
            $table->string('Beban_Jasa_Medik_Dokter_Operasi_Ralan', 15)->index('Beban_Jasa_Medik_Dokter_Operasi_Ralan');
            $table->string('Utang_Jasa_Medik_Dokter_Operasi_Ralan', 15)->index('Utang_Jasa_Medik_Dokter_Operasi_Ralan');
            $table->string('Beban_Jasa_Medik_Paramedis_Operasi_Ralan', 15)->index('Beban_Jasa_Medik_Paramedis_Operasi_Ralan');
            $table->string('Utang_Jasa_Medik_Paramedis_Operasi_Ralan', 15)->index('Utang_Jasa_Medik_Paramedis_Operasi_Ralan');
            $table->string('HPP_Obat_Operasi_Ralan', 15)->index('HPP_Obat_Operasi_Ralan');
            $table->string('Persediaan_Obat_Kamar_Operasi_Ralan', 15)->index('Persediaan_Obat_Kamar_Operasi_Ralan');
            $table->string('Tambahan_Ralan', 15)->nullable()->index('Tambahan_Ralan');
            $table->string('Potongan_Ralan', 15)->nullable()->index('Potongan_Ralan');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('set_akun_ralan');
    }
}
