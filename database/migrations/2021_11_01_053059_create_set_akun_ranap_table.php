<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSetAkunRanapTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('set_akun_ranap', function (Blueprint $table) {
            $table->string('Suspen_Piutang_Tindakan_Ranap', 15)->index('Suspen_Piutang_Tindakan_Ranap');
            $table->string('Tindakan_Ranap', 15)->nullable()->index('Tindakan_Ranap');
            $table->string('Beban_Jasa_Medik_Dokter_Tindakan_Ranap', 15)->index('Beban_Jasa_Medik_Dokter_Tindakan_Ranap');
            $table->string('Utang_Jasa_Medik_Dokter_Tindakan_Ranap', 15)->index('Utang_Jasa_Medik_Dokter_Tindakan_Ranap');
            $table->string('Beban_Jasa_Medik_Paramedis_Tindakan_Ranap', 15)->index('Beban_Jasa_Medik_Paramedis_Tindakan_Ranap');
            $table->string('Utang_Jasa_Medik_Paramedis_Tindakan_Ranap', 15)->index('Utang_Jasa_Medik_Paramedis_Tindakan_Ranap');
            $table->string('Beban_KSO_Tindakan_Ranap', 15)->index('Beban_KSO_Tindakan_Ranap');
            $table->string('Utang_KSO_Tindakan_Ranap', 15)->index('Utang_KSO_Tindakan_Ranap');
            $table->string('Suspen_Piutang_Laborat_Ranap', 15)->index('Suspen_Piutang_Laborat_Ranap');
            $table->string('Laborat_Ranap', 15)->nullable()->index('Laborat_Ranap');
            $table->string('Beban_Jasa_Medik_Dokter_Laborat_Ranap', 15)->index('Beban_Jasa_Medik_Dokter_Laborat_Ranap');
            $table->string('Utang_Jasa_Medik_Dokter_Laborat_Ranap', 15)->index('Utang_Jasa_Medik_Dokter_Laborat_Ranap');
            $table->string('Beban_Jasa_Medik_Petugas_Laborat_Ranap', 15)->index('Beban_Jasa_Medik_Petugas_Laborat_Ranap');
            $table->string('Utang_Jasa_Medik_Petugas_Laborat_Ranap', 15)->index('Utang_Jasa_Medik_Petugas_Laborat_Ranap');
            $table->string('Beban_Kso_Laborat_Ranap', 15)->index('Beban_Kso_Laborat_Ranap');
            $table->string('Utang_Kso_Laborat_Ranap', 15)->index('Utang_Kso_Laborat_Ranap');
            $table->string('HPP_Persediaan_Laborat_Rawat_inap', 15)->index('HPP_Persediaan_Laborat_Rawat_inap');
            $table->string('Persediaan_BHP_Laborat_Rawat_Inap', 15)->index('Persediaan_BHP_Laborat_Rawat_Inap');
            $table->string('Suspen_Piutang_Radiologi_Ranap', 15)->index('Suspen_Piutang_Radiologi_Ranap');
            $table->string('Radiologi_Ranap', 15)->nullable()->index('Radiologi_Ranap');
            $table->string('Beban_Jasa_Medik_Dokter_Radiologi_Ranap', 15)->index('Beban_Jasa_Medik_Dokter_Radiologi_Ranap');
            $table->string('Utang_Jasa_Medik_Dokter_Radiologi_Ranap', 15)->index('Utang_Jasa_Medik_Dokter_Radiologi_Ranap');
            $table->string('Beban_Jasa_Medik_Petugas_Radiologi_Ranap', 15)->index('Beban_Jasa_Medik_Petugas_Radiologi_Ranap');
            $table->string('Utang_Jasa_Medik_Petugas_Radiologi_Ranap', 15)->index('Utang_Jasa_Medik_Petugas_Radiologi_Ranap');
            $table->string('Beban_Kso_Radiologi_Ranap', 15)->index('Beban_Kso_Radiologi_Ranap');
            $table->string('Utang_Kso_Radiologi_Ranap', 15)->index('Utang_Kso_Radiologi_Ranap');
            $table->string('HPP_Persediaan_Radiologi_Rawat_Inap', 15)->index('HPP_Persediaan_Radiologi_Rawat_Inap');
            $table->string('Persediaan_BHP_Radiologi_Rawat_Inap', 15)->index('Persediaan_BHP_Radiologi_Rawat_Inap');
            $table->string('Suspen_Piutang_Obat_Ranap', 15)->index('Suspen_Piutang_Obat_Ranap');
            $table->string('Obat_Ranap', 15)->nullable()->index('Obat_Ranap');
            $table->string('HPP_Obat_Rawat_Inap', 15)->index('HPP_Obat_Rawat_Inap');
            $table->string('Persediaan_Obat_Rawat_Inap', 15)->index('Persediaan_Obat_Rawat_Inap');
            $table->string('Registrasi_Ranap', 15)->nullable()->index('Registrasi_Ranap');
            $table->string('Service_Ranap', 15)->nullable()->index('Service_Ranap');
            $table->string('Tambahan_Ranap', 15)->nullable()->index('Tambahan_Ranap');
            $table->string('Potongan_Ranap', 15)->nullable()->index('Potongan_Ranap');
            $table->string('Retur_Obat_Ranap', 15)->nullable()->index('Retur_Obat_Ranap');
            $table->string('Resep_Pulang_Ranap', 15)->nullable()->index('Resep_Pulang_Ranap');
            $table->string('Kamar_Inap', 15)->nullable()->index('Kamar_Inap');
            $table->string('Suspen_Piutang_Operasi_Ranap', 15)->index('Suspen_Piutang_Operasi_Ranap');
            $table->string('Operasi_Ranap', 15)->nullable()->index('Operasi_Ranap');
            $table->string('Beban_Jasa_Medik_Dokter_Operasi_Ranap', 15)->index('Beban_Jasa_Medik_Dokter_Operasi_Ranap');
            $table->string('Utang_Jasa_Medik_Dokter_Operasi_Ranap', 15)->index('Utang_Jasa_Medik_Dokter_Operasi_Ranap');
            $table->string('Beban_Jasa_Medik_Paramedis_Operasi_Ranap', 15)->index('Beban_Jasa_Medik_Paramedis_Operasi_Ranap');
            $table->string('Utang_Jasa_Medik_Paramedis_Operasi_Ranap', 15)->index('Utang_Jasa_Medik_Paramedis_Operasi_Ranap');
            $table->string('HPP_Obat_Operasi_Ranap', 15)->index('HPP_Obat_Operasi_Ranap');
            $table->string('Persediaan_Obat_Kamar_Operasi_Ranap', 15)->index('Persediaan_Obat_Kamar_Operasi_Ranap');
            $table->string('Harian_Ranap', 15)->nullable()->index('Harian_Ranap');
            $table->string('Uang_Muka_Ranap', 15)->nullable()->index('Uang_Muka_Ranap');
            $table->string('Piutang_Pasien_Ranap', 15)->nullable()->index('Piutang_Pasien_Ranap');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('set_akun_ranap');
    }
}
