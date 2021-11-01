<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePenilaianAwalKeperawatanRalanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('penilaian_awal_keperawatan_ralan', function (Blueprint $table) {
            $table->string('no_rawat', 17)->primary();
            $table->dateTime('tanggal');
            $table->enum('informasi', ['Autoanamnesis', 'Alloanamnesis']);
            $table->string('td', 8)->default('');
            $table->string('nadi', 5)->default('');
            $table->string('rr', 5);
            $table->string('suhu', 5)->default('');
            $table->string('gcs', 5);
            $table->string('bb', 5)->default('');
            $table->string('tb', 5)->default('');
            $table->string('bmi', 10);
            $table->string('keluhan_utama', 150)->default('');
            $table->string('rpd', 100)->default('');
            $table->string('rpk', 100);
            $table->string('rpo', 100);
            $table->string('alergi', 25)->default('');
            $table->enum('alat_bantu', ['Tidak', 'Ya']);
            $table->string('ket_bantu', 50)->default('');
            $table->enum('prothesa', ['Tidak', 'Ya']);
            $table->string('ket_pro', 50);
            $table->enum('adl', ['Mandiri', 'Dibantu']);
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
            $table->enum('sg1', ['Tidak', 'Tidak Yakin', 'Ya, 1-5 Kg', 'Ya, 6-10 Kg', 'Ya, 11-15 Kg', 'Ya, >15 Kg']);
            $table->enum('nilai1', ['0', '1', '2', '3', '4']);
            $table->enum('sg2', ['Ya', 'Tidak']);
            $table->enum('nilai2', ['0', '1']);
            $table->tinyInteger('total_hasil');
            $table->enum('nyeri', ['Tidak Ada Nyeri', 'Nyeri Akut', 'Nyeri Kronis']);
            $table->enum('provokes', ['Proses Penyakit', 'Benturan', 'Lain-lain']);
            $table->string('ket_provokes', 40);
            $table->enum('quality', ['Seperti Tertusuk', 'Berdenyut', 'Teriris', 'Tertindih', 'Tertiban', 'Lain-lain']);
            $table->string('ket_quality', 50);
            $table->string('lokasi', 50);
            $table->enum('menyebar', ['Tidak', 'Ya']);
            $table->enum('skala_nyeri', ['0', '1', '2', '3', '4', '5', '6', '7', '8', '9', '10']);
            $table->string('durasi', 25);
            $table->enum('nyeri_hilang', ['Istirahat', 'Medengar Musik', 'Minum Obat']);
            $table->string('ket_nyeri', 40);
            $table->enum('pada_dokter', ['Tidak', 'Ya']);
            $table->string('ket_dokter', 15);
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
        Schema::dropIfExists('penilaian_awal_keperawatan_ralan');
    }
}
