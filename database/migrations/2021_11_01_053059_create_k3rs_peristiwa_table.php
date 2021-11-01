<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateK3rsPeristiwaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('k3rs_peristiwa', function (Blueprint $table) {
            $table->string('no_k3rs', 20)->primary();
            $table->date('tgl_insiden');
            $table->time('waktu_insiden');
            $table->string('kode_pekerjaan', 5)->index('kode_pekerjaan');
            $table->date('tgl_pelaporan');
            $table->time('waktu_pelaporan');
            $table->string('kode_lokasi', 5)->index('kode_lokasi');
            $table->string('kronologi_kejadian', 300);
            $table->string('kode_penyebab', 5)->index('kode_penyebab');
            $table->string('nik', 20)->index('nik');
            $table->enum('kategori_cidera', ['Ringan', 'Sedang', 'Berat', 'Fatal']);
            $table->string('kode_cidera', 5)->index('kode_cidera');
            $table->string('kode_luka', 5)->index('kode_luka');
            $table->string('kode_bagian', 5)->index('kode_bagian');
            $table->integer('lt');
            $table->string('penyebab_langsung_kondisi', 100);
            $table->string('penyebab_langsung_tindakan', 100);
            $table->string('penyebab_tidak_langsung_pribadi', 100);
            $table->string('penyebab_tidak_langsung_pekerjaan', 100);
            $table->enum('barang_bukti', ['Ya', 'Tidak']);
            $table->string('kode_dampak', 5)->index('kode_dampak');
            $table->string('nik_pelapor', 20)->index('nik_pelapor');
            $table->enum('perbaikan_jenis_tindakan', ['Tindakan Perbaikan', 'Tindakan Pencegahan']);
            $table->string('perbaikan_rencana_tindakan', 200);
            $table->date('perbaikan_target');
            $table->string('perbaikan_wewenang', 100);
            $table->string('nik_timk3', 20)->index('nik_timk3');
            $table->string('catatan', 200);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('k3rs_peristiwa');
    }
}
