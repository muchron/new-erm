<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePenilaianAwalKeperawatanGigiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('penilaian_awal_keperawatan_gigi', function (Blueprint $table) {
            $table->string('no_rawat', 17)->primary();
            $table->dateTime('tanggal');
            $table->enum('informasi', ['Autoanamnesis', 'Alloanamnesis']);
            $table->string('td', 8)->default('');
            $table->string('nadi', 5)->default('');
            $table->string('rr', 5);
            $table->string('suhu', 5)->default('');
            $table->string('bb', 5)->default('');
            $table->string('tb', 5)->default('');
            $table->string('bmi', 10);
            $table->string('keluhan_utama', 150)->default('');
            $table->enum('riwayat_penyakit', ['Tidak Ada', 'Diabetes Melitus', 'Hipertensi', 'Penyakit Jantung', 'HIV', 'Hepatitis', 'Haemophilia', 'Lain-lain'])->nullable();
            $table->string('ket_riwayat_penyakit', 30);
            $table->string('alergi', 25)->default('');
            $table->enum('riwayat_perawatan_gigi', ['Tidak', 'Ya, Kapan']);
            $table->string('ket_riwayat_perawatan_gigi', 50)->default('');
            $table->enum('kebiasaan_sikat_gigi', ['1x', '2x', '3x', 'Mandi', 'Setelah Makan', 'Sebelum Tidur']);
            $table->enum('kebiasaan_lain', ['Tidak ada', 'Minum kopi/teh', 'Minum alkohol', 'Bruxism', 'Menggigit pensil', 'Mengunyah 1 sisi rahang', 'Merokok', 'Lain-lain'])->nullable();
            $table->string('ket_kebiasaan_lain', 30);
            $table->string('obat_yang_diminum_saatini', 100)->nullable();
            $table->enum('alat_bantu', ['Tidak', 'Ya']);
            $table->string('ket_alat_bantu', 30);
            $table->enum('prothesa', ['Tidak', 'Ya']);
            $table->string('ket_pro', 50);
            $table->enum('status_psiko', ['Tenang', 'Takut', 'Cemas', 'Depresi', 'Lain-lain']);
            $table->string('ket_psiko', 70);
            $table->enum('hub_keluarga', ['Baik', 'Tidak Baik']);
            $table->enum('tinggal_dengan', ['Sendiri', 'Orang Tua', 'Suami / Istri', 'Lainnya']);
            $table->string('ket_tinggal', 40);
            $table->enum('ekonomi', ['Baik', 'Cukup', 'Kurang']);
            $table->enum('budaya', ['Tidak Ada', 'Ada']);
            $table->string('ket_budaya', 50);
            $table->enum('edukasi', ['Pasien', 'Keluarga']);
            $table->string('ket_edukasi', 50);
            $table->enum('berjalan_a', ['Ya', 'Tidak']);
            $table->enum('berjalan_b', ['Ya', 'Tidak']);
            $table->enum('berjalan_c', ['Ya', 'Tidak']);
            $table->enum('hasil', ['Tidak beresiko (tidak ditemukan a dan b)', 'Resiko rendah (ditemukan a/b)', 'Resiko tinggi (ditemukan a dan b)']);
            $table->enum('lapor', ['Ya', 'Tidak']);
            $table->string('ket_lapor', 15);
            $table->enum('nyeri', ['Tidak Ada Nyeri', 'Nyeri Akut', 'Nyeri Kronis']);
            $table->string('lokasi', 50);
            $table->enum('skala_nyeri', ['0', '1', '2', '3', '4', '5', '6', '7', '8', '9', '10']);
            $table->string('durasi', 25);
            $table->string('frekuensi', 25);
            $table->enum('nyeri_hilang', ['Istirahat', 'Medengar Musik', 'Minum Obat', 'Tidak ada nyeri', 'Lain-lain']);
            $table->string('ket_nyeri', 40);
            $table->enum('pada_dokter', ['Tidak', 'Ya']);
            $table->string('ket_dokter', 15);
            $table->enum('kebersihan_mulut', ['Baik', 'Cukup', 'Kurang']);
            $table->enum('mukosa_mulut', ['Normal', 'Pigmentasi', 'Radang']);
            $table->enum('karies', ['Ada', 'Tidak']);
            $table->enum('karang_gigi', ['Ada', 'Tidak']);
            $table->enum('gingiva', ['Normal', 'Radang']);
            $table->enum('palatum', ['Normal', 'Radang']);
            $table->string('rencana', 200);
            $table->string('nip', 20)->index('nip');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('penilaian_awal_keperawatan_gigi');
    }
}
