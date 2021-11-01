<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDataTbTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_tb', function (Blueprint $table) {
            $table->string('no_rawat', 17)->primary();
            $table->string('id_tb_03', 30)->nullable();
            $table->enum('id_periode_laporan', ['1=Januari - Maret', '2=April - Juni', '3=Juli - September', '4=Oktober - Desember'])->nullable();
            $table->dateTime('tanggal_buat_laporan')->nullable();
            $table->year('tahun_buat_laporan')->nullable();
            $table->integer('kd_wasor')->nullable();
            $table->integer('noregkab')->nullable();
            $table->string('id_propinsi', 15)->nullable();
            $table->string('kd_kabupaten', 15)->nullable();
            $table->string('id_kecamatan', 15)->nullable();
            $table->string('id_kelurahan', 15)->nullable();
            $table->enum('nama_rujukan', ['Inisiatif pasien/Keluarga', 'Anggota Masyarakat/Kader', 'Faskes', 'Dokter Praktek Mandiri', 'Poli lain', 'Lain-lain'])->nullable();
            $table->string('sebutkan1', 100)->nullable();
            $table->enum('tipe_diagnosis', ['Terkonfirmasi bakteriologis', 'Terdiagnosis klinis'])->nullable();
            $table->enum('klasifikasi_lokasi_anatomi', ['Paru', 'Ekstraparu'])->nullable();
            $table->enum('klasifikasi_riwayat_pengobatan', ['Baru', 'Kambuh', 'Diobati setelah gagal', 'Diobati Setelah Putus Berobat', 'Lain-lain', 'Riwayat Pengobatan Sebelumnya Tidak Diketahui', 'Pindahan'])->nullable();
            $table->enum('klasifikasi_status_hiv', ['Positif', 'Negatif', 'Tidak diketahui'])->nullable();
            $table->enum('total_skoring_anak', ['1', '2', '3', '4', '5', '6', '7', '8', '9', '10', '11', '12', '13', 'Tidak dilakukan'])->nullable();
            $table->enum('konfirmasiSkoring5', ['Uji Tuberkulin Positif', 'Ada Kontak TB Paru', 'Uji Tuberkulin Negatif', 'Tidak Ada Kontak TB Paru'])->nullable();
            $table->enum('konfirmasiSkoring6', ['Ada Kontak TB Paru', 'Tidak Ada', 'Tidak Jelas Kontak TB Paru'])->nullable();
            $table->date('tanggal_mulai_pengobatan')->nullable();
            $table->string('paduan_oat', 500)->nullable();
            $table->enum('sumber_obat', ['Program TB', 'Bayar Sendiri', 'Asuransi', 'Lain-lain'])->nullable();
            $table->string('sebutkan', 500)->nullable();
            $table->enum('sebelum_pengobatan_hasil_mikroskopis', ['Positif', 'Negatif', 'Tidak dilakukan'])->nullable();
            $table->enum('sebelum_pengobatan_hasil_tes_cepat', ['Rif sensitif', 'Rif resisten', 'Negatif', 'Rif Indeterminated', 'Invalid', 'Error', 'No Result', 'Tidak dilakukan'])->nullable();
            $table->enum('sebelum_pengobatan_hasil_biakan', ['Negatif', '1-19 BTA', '1+', '2+', '3+', '4+', 'NTM', 'Kontaminasi', 'Tidak dilakukan'])->nullable();
            $table->string('noreglab_bulan_2', 15)->nullable();
            $table->enum('hasil_mikroskopis_bulan_2', ['Positif', 'Negatif', 'Tidak dilakukan'])->nullable();
            $table->string('noreglab_bulan_3', 15)->nullable();
            $table->enum('hasil_mikroskopis_bulan_3', ['Positif', 'Negatif', 'Tidak dilakukan'])->nullable();
            $table->string('noreglab_bulan_5', 15)->nullable();
            $table->enum('hasil_mikroskopis_bulan_5', ['Positif', 'Negatif', 'Tidak dilakukan'])->nullable();
            $table->string('akhir_pengobatan_noreglab', 15)->nullable();
            $table->enum('akhir_pengobatan_hasil_mikroskopis', ['Positif', 'Negatif', 'Tidak dilakukan'])->nullable();
            $table->date('tanggal_hasil_akhir_pengobatan')->nullable();
            $table->enum('hasil_akhir_pengobatan', ['Sembuh', 'Pengobatan Lengkap', 'Lost To Follow Up', 'Meninggal', 'Gagal', 'Pindah'])->nullable();
            $table->date('tanggal_dianjurkan_tes')->nullable();
            $table->date('tanggal_tes_hiv')->nullable();
            $table->enum('hasil_tes_hiv', ['Reaktif', 'Non Reaktif', 'Indeterminated'])->nullable();
            $table->enum('ppk', ['Ya', 'Tidak'])->nullable();
            $table->enum('art', ['Ya', 'Tidak'])->nullable();
            $table->enum('tb_dm', ['Ya', 'Tidak'])->nullable();
            $table->enum('terapi_dm', ['OHO', 'Inj. Insulin', ''])->nullable();
            $table->enum('pindah_ro', ['Ya', 'Tidak'])->nullable();
            $table->enum('status_pengobatan', ['Sesuai Standar', 'Tidak Sesuai Standar'])->nullable();
            $table->enum('foto_toraks', ['Positif', 'Negatif', 'Tidak Dilakukan'])->nullable();
            $table->enum('toraks_tdk_dilakukan', ['Tidak dilakukan', 'Setelah terapi antibioka non OAT: tidak ada perbaikan Klinis, ada faktor resiko TB, dan atas pertimbangan dokter', 'Setelah terapi antibioka non OAT: ada Perbaikan Klinis'])->nullable();
            $table->string('keterangan', 100)->nullable();
            $table->string('kode_icd_x', 10)->nullable()->index('kode_icd_x');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('data_tb');
    }
}
