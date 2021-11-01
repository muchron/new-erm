<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePenilaianAwalKeperawatanKebidananTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('penilaian_awal_keperawatan_kebidanan', function (Blueprint $table) {
            $table->string('no_rawat', 17)->primary();
            $table->dateTime('tanggal');
            $table->enum('informasi', ['Autoanamnesis', 'Alloanamnesis']);
            $table->string('td', 8)->default('');
            $table->string('nadi', 5)->default('');
            $table->string('rr', 5);
            $table->string('suhu', 5)->default('');
            $table->string('gcs', 10);
            $table->string('bb', 5)->default('');
            $table->string('tb', 5)->default('');
            $table->string('lila', 5);
            $table->string('bmi', 10);
            $table->string('tfu', 10);
            $table->string('tbj', 10);
            $table->string('letak', 10);
            $table->string('presentasi', 10);
            $table->string('penurunan', 10);
            $table->string('his', 10);
            $table->string('kekuatan', 10);
            $table->string('lamanya', 10);
            $table->string('bjj', 10);
            $table->enum('ket_bjj', ['Teratur', 'Tidak Teratur']);
            $table->string('portio', 10);
            $table->string('serviks', 10);
            $table->string('ketuban', 10);
            $table->string('hodge', 10);
            $table->enum('inspekulo', ['Dilakukan', 'Tidak']);
            $table->string('ket_inspekulo', 50);
            $table->enum('ctg', ['Dilakukan', 'Tidak']);
            $table->string('ket_ctg', 50);
            $table->enum('usg', ['Dilakukan', 'Tidak']);
            $table->string('ket_usg', 50);
            $table->enum('lab', ['Dilakukan', 'Tidak']);
            $table->string('ket_lab', 50);
            $table->enum('lakmus', ['Dilakukan', 'Tidak']);
            $table->string('ket_lakmus', 50);
            $table->enum('panggul', ['Luas', 'Sedang', 'Sempit', 'Tidak Dilakukan Pemeriksaan']);
            $table->string('keluhan_utama', 1000)->default('');
            $table->string('umur', 10);
            $table->string('lama', 10);
            $table->string('banyaknya', 10);
            $table->string('haid', 20);
            $table->string('siklus', 10);
            $table->enum('ket_siklus', ['Teratur', 'Tidak Teratur']);
            $table->enum('ket_siklus1', ['Tidak Ada Masalah', 'Dismenorhea', 'Spotting', 'Menorhagia', 'PMS']);
            $table->enum('status', ['Menikah', 'Tidak / Belum Menikah']);
            $table->string('kali', 5);
            $table->string('usia1', 5);
            $table->enum('ket1', ['-', 'Masih Menikah', 'Cerai', 'Meninggal']);
            $table->string('usia2', 5)->nullable();
            $table->enum('ket2', ['-', 'Masih Menikah', 'Cerai', 'Meninggal'])->nullable();
            $table->string('usia3', 5)->nullable();
            $table->enum('ket3', ['-', 'Masih Menikah', 'Cerai', 'Meninggal'])->nullable();
            $table->date('hpht')->nullable();
            $table->string('usia_kehamilan', 10);
            $table->date('tp')->nullable();
            $table->enum('imunisasi', ['Tidak', 'Ya']);
            $table->string('ket_imunisasi', 10);
            $table->string('g', 10);
            $table->string('p', 10);
            $table->string('a', 10);
            $table->string('hidup', 10);
            $table->enum('ginekologi', ['Tidak Ada', 'Infertilitas', 'Infeksi Virus', 'PMS', 'Cervisitis Kronis', 'Endometriosis', 'Mioma', 'Polip Cervix', 'Kanker Kandungan', 'Operasi Kandungan']);
            $table->enum('kebiasaan', ['-', 'Obat Obatan', 'Vitamin', 'Jamu Jamuan']);
            $table->string('ket_kebiasaan', 50);
            $table->enum('kebiasaan1', ['Tidak', 'Ya']);
            $table->string('ket_kebiasaan1', 5);
            $table->enum('kebiasaan2', ['Tidak', 'Ya']);
            $table->string('ket_kebiasaan2', 5);
            $table->enum('kebiasaan3', ['Tidak', 'Ya']);
            $table->enum('kb', ['Belum Pernah', 'Suntik', 'Pil', 'AKDR', 'MOW']);
            $table->string('ket_kb', 10);
            $table->enum('komplikasi', ['Tidak Ada', 'Ada']);
            $table->string('ket_komplikasi', 50);
            $table->string('berhenti', 20);
            $table->string('alasan', 50);
            $table->enum('alat_bantu', ['Tidak', 'Ya']);
            $table->string('ket_bantu', 50)->default('');
            $table->enum('prothesa', ['Tidak', 'Ya']);
            $table->string('ket_pro', 50);
            $table->enum('adl', ['Mandiri', 'Dibantu']);
            $table->enum('status_psiko', ['Tenang', 'Takut', 'Cemas', 'Depresi', 'Lain-Lain']);
            $table->string('ket_psiko', 50);
            $table->enum('hub_keluarga', ['Baik', 'Tidak Baik']);
            $table->enum('tinggal_dengan', ['Sendiri', 'Orang Tua', 'Suami / Istri', 'Lainnya']);
            $table->string('ket_tinggal', 50);
            $table->enum('ekonomi', ['Baik', 'Cukup', 'Kurang']);
            $table->enum('budaya', ['Tidak Ada', 'Ada']);
            $table->string('ket_budaya', 50);
            $table->enum('edukasi', ['Pasien', 'Keluarga']);
            $table->string('ket_edukasi', 50);
            $table->enum('berjalan_a', ['Ya', 'Tidak']);
            $table->enum('berjalan_b', ['Ya', 'Tidak']);
            $table->enum('berjalan_c', ['Ya', 'Tidak']);
            $table->enum('hasil', ['Tidak Beresiko (Tidak Ditemukan A Dan B)', 'Resiko Rendah (Ditemukan A/B)', 'Resiko Tinggi (Ditemukan A Dan B)']);
            $table->enum('lapor', ['Ya', 'Tidak']);
            $table->string('ket_lapor', 10);
            $table->enum('sg1', ['Tidak', 'Tidak Yakin', 'Ya(1-5 Kg)', 'Ya(6-10Kg)', 'Ya(11-15Kg)', 'Ya(>15Kg)']);
            $table->enum('nilai1', ['0', '1', '2', '3', '4']);
            $table->enum('sg2', ['Ya', 'Tidak']);
            $table->enum('nilai2', ['0', '1']);
            $table->string('total_hasil', 5);
            $table->enum('nyeri', ['Tidak Ada Nyeri', 'Nyeri Akut', 'Nyeri Kronis']);
            $table->enum('provokes', ['Proses Penyakit', 'Benturan', 'Lain-Lain']);
            $table->string('ket_provokes', 40);
            $table->enum('quality', ['Seperti Tertusuk', 'Berdenyut', 'Teriris', 'Tertindih', 'Tertiban', 'Lain-Lain']);
            $table->string('ket_quality', 40);
            $table->string('lokasi', 40);
            $table->enum('menyebar', ['Tidak', 'Ya']);
            $table->enum('skala_nyeri', ['0', '1', '2', '3', '4', '5', '6', '7', '8', '9', '10']);
            $table->string('durasi', 5);
            $table->enum('nyeri_hilang', ['Istirahat', 'Mendengar Musik', 'Minum Obat']);
            $table->string('ket_nyeri', 40);
            $table->enum('pada_dokter', ['Tidak', 'Ya']);
            $table->string('ket_dokter', 10);
            $table->string('masalah', 1000);
            $table->string('tindakan', 1000);
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
        Schema::dropIfExists('penilaian_awal_keperawatan_kebidanan');
    }
}
