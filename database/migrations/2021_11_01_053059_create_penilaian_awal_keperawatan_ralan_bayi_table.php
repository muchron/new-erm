<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePenilaianAwalKeperawatanRalanBayiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('penilaian_awal_keperawatan_ralan_bayi', function (Blueprint $table) {
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
            $table->string('lp', 5)->default('');
            $table->string('lk', 5)->default('');
            $table->string('ld', 5)->default('');
            $table->string('keluhan_utama', 150)->default('');
            $table->string('rpd', 100)->default('');
            $table->string('rpk', 100);
            $table->string('rpo', 100);
            $table->string('alergi', 25)->default('');
            $table->tinyInteger('anakke');
            $table->tinyInteger('darisaudara');
            $table->enum('caralahir', ['Spontan', 'Sectio Caesaria', 'Lain-Lain']);
            $table->string('ket_caralahir', 30);
            $table->enum('umurkelahiran', ['Cukup Bulan', 'Kurang Bulan']);
            $table->enum('kelainanbawaan', ['Tidak Ada', 'Ada']);
            $table->string('ket_kelainan_bawaan', 30);
            $table->string('usiatengkurap', 15);
            $table->string('usiaduduk', 15);
            $table->string('usiaberdiri', 15);
            $table->string('usiagigipertama', 15);
            $table->string('usiaberjalan', 15);
            $table->string('usiabicara', 15);
            $table->string('usiamembaca', 15);
            $table->string('usiamenulis', 15);
            $table->string('gangguanemosi', 50);
            $table->enum('alat_bantu', ['Tidak', 'Ya']);
            $table->string('ket_bantu', 50)->default('');
            $table->enum('prothesa', ['Tidak', 'Ya']);
            $table->string('ket_pro', 50);
            $table->enum('adl', ['Mandiri', 'Dibantu']);
            $table->enum('status_psiko', ['Tenang', 'Takut', 'Cemas', 'Depresi', 'Lain-lain']);
            $table->string('ket_psiko', 70);
            $table->enum('hub_keluarga', ['Baik', 'Tidak Baik']);
            $table->enum('pengasuh', ['Orang Tua', 'Kakek/Nenek', 'Keluarga Lainnya']);
            $table->string('ket_pengasuh', 40);
            $table->enum('ekonomi', ['Baik', 'Cukup', 'Kurang']);
            $table->enum('budaya', ['Tidak Ada', 'Ada']);
            $table->string('ket_budaya', 50);
            $table->enum('edukasi', ['Orang Tua', 'Keluarga']);
            $table->string('ket_edukasi', 50);
            $table->enum('berjalan_a', ['Ya', 'Tidak']);
            $table->enum('berjalan_b', ['Ya', 'Tidak']);
            $table->enum('berjalan_c', ['Ya', 'Tidak']);
            $table->enum('hasil', ['Tidak beresiko (tidak ditemukan a dan b)', 'Resiko rendah (ditemukan a/b)', 'Resiko tinggi (ditemukan a dan b)']);
            $table->enum('lapor', ['Ya', 'Tidak']);
            $table->string('ket_lapor', 15);
            $table->enum('sg1', ['Tidak', 'Ya']);
            $table->enum('nilai1', ['0', '1']);
            $table->enum('sg2', ['Tidak', 'Ya']);
            $table->enum('nilai2', ['0', '1']);
            $table->enum('sg3', ['Tidak', 'Ya']);
            $table->enum('nilai3', ['0', '1']);
            $table->enum('sg4', ['Tidak', 'Ya']);
            $table->enum('nilai4', ['0', '1']);
            $table->tinyInteger('total_hasil');
            $table->enum('wajah', ['Tersenyum/tidak ada ekspresi khusus', 'Terkadang meringis/menarik diri', 'Sering menggetarkan dagu dan mengatupkan rahang']);
            $table->enum('nilaiwajah', ['0', '1', '2']);
            $table->enum('kaki', ['Gerakan normal/relaksasi', 'Tidak tenang/tegang', 'Kaki dibuat menendang/menarik']);
            $table->enum('nilaikaki', ['0', '1', '2']);
            $table->enum('aktifitas', ['Tidur posisi normal, mudah bergerak', 'Gerakan menggeliat/berguling, kaku', 'Melengkungkan punggung/kaku menghentak']);
            $table->enum('nilaiaktifitas', ['0', '1', '2']);
            $table->enum('menangis', ['Tidak menangis (mudah bergerak)', 'Mengerang/merengek', 'Menangis terus menerus, terisak, menjerit']);
            $table->enum('nilaimenangis', ['0', '1', '2']);
            $table->enum('bersuara', ['Bersuara normal/tenang', 'Tenang bila dipeluk, digendong/diajak bicara', 'Sulit untuk menenangkan']);
            $table->enum('nilaibersuara', ['0', '1', '2']);
            $table->tinyInteger('hasilnyeri');
            $table->enum('nyeri', ['Tidak Ada Nyeri', 'Nyeri Akut', 'Nyeri Kronis']);
            $table->string('lokasi', 50);
            $table->enum('skala_nyeri', ['0', '1', '2', '3', '4', '5', '6', '7', '8', '9', '10']);
            $table->string('durasi', 25);
            $table->string('frekuensi', 25);
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
        Schema::dropIfExists('penilaian_awal_keperawatan_ralan_bayi');
    }
}
