<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSiranapKetersediaanKamarTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('siranap_ketersediaan_kamar', function (Blueprint $table) {
            $table->enum('kode_ruang_siranap', ['0000 Umum', '0001 Anak', '0002 Anak (Luka Bakar)', '0003 Penyakit Dalam', '0004 Kebidanan', '0005 Kandungan', '0006 Bedah', '0007 Kanker', '0008 Mata', '0009 THT', '0010 Paru', '0011 Jantung', '0012 Orthopedi', '0013 Kulit dan Kelamin', '0014 Saraf', '0015 Jiwa', '0016 Infeksi', '0017 Luka Bakar', '0018 NAPZA', '0019 Isolasi Air Borne', '0020 Isolasi TB MDR', '0021 Kulit dan Kelamin', '0022 Isolasi Imunitas menurun', '0023 Isolasi Radioaktif', '0024 ICU/RICU', '0025 NICU', '0026 PICU', '0027 CVCU/ICCU', '0029 HCU', '0030 Kedokteran Nuklir']);
            $table->enum('kelas_ruang_siranap', ['0001 Super VIP', '0002 VIP', '0003 Kelas 1', '0004 Kelas 2', '0005 Kelas 3', '0006 Intermediate', '0007 Isolasi', '0008 Rawat Khusus', '0009 Stroke Care Unit']);
            $table->char('kd_bangsal', 5)->default('')->index('kd_bangsal');
            $table->enum('kelas', ['Kelas 1', 'Kelas 2', 'Kelas 3', 'Kelas Utama', 'Kelas VIP', 'Kelas VVIP'])->default('Kelas 1');
            $table->integer('kapasitas')->nullable()->index('kapasitas');
            $table->integer('tersedia')->nullable()->index('tersedia');
            $table->integer('tersediapria')->nullable()->index('tersediapria');
            $table->integer('tersediawanita')->nullable()->index('tersediawanita');
            $table->integer('menunggu')->nullable()->index('tersediapriawanita');

            $table->primary(['kode_ruang_siranap', 'kelas_ruang_siranap', 'kd_bangsal', 'kelas']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('siranap_ketersediaan_kamar');
    }
}
