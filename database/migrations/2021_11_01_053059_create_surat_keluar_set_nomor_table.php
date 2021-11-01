<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSuratKeluarSetNomorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('surat_keluar_set_nomor', function (Blueprint $table) {
            $table->integer('id_no_surat', true);
            $table->string('jenis_surat', 100);
            $table->enum('digit_1', ['No Urut Bulanan', 'No Urut Tahunan', 'Kode Klasifikasi Surat', 'Kode Sub Klasifikasi Surat', 'Tanggal Angka', 'Tanggal Romawi', 'Bulan Angka', 'Bulan Romawi', 'Tahun', 'Pemisah (-)', 'Pemisah (/)', 'Pemisah (.)', ''])->nullable();
            $table->enum('digit_2', ['No Urut Bulanan', 'No Urut Tahunan', 'Kode Klasifikasi Surat', 'Kode Sub Klasifikasi Surat', 'Tanggal Angka', 'Tanggal Romawi', 'Bulan Angka', 'Bulan Romawi', 'Tahun', 'Pemisah (-)', 'Pemisah (/)', 'Pemisah (.)', ''])->nullable();
            $table->enum('digit_3', ['No Urut Bulanan', 'No Urut Tahunan', 'Kode Klasifikasi Surat', 'Kode Sub Klasifikasi Surat', 'Tanggal Angka', 'Tanggal Romawi', 'Bulan Angka', 'Bulan Romawi', 'Tahun', 'Pemisah (-)', 'Pemisah (/)', 'Pemisah (.)', ''])->nullable();
            $table->enum('digit_4', ['No Urut Bulanan', 'No Urut Tahunan', 'Kode Klasifikasi Surat', 'Kode Sub Klasifikasi Surat', 'Tanggal Angka', 'Tanggal Romawi', 'Bulan Angka', 'Bulan Romawi', 'Tahun', 'Pemisah (-)', 'Pemisah (/)', 'Pemisah (.)', ''])->nullable();
            $table->enum('digit_5', ['No Urut Bulanan', 'No Urut Tahunan', 'Kode Klasifikasi Surat', 'Kode Sub Klasifikasi Surat', 'Tanggal Angka', 'Tanggal Romawi', 'Bulan Angka', 'Bulan Romawi', 'Tahun', 'Pemisah (-)', 'Pemisah (/)', 'Pemisah (.)', ''])->nullable();
            $table->enum('digit_6', ['No Urut Bulanan', 'No Urut Tahunan', 'Kode Klasifikasi Surat', 'Kode Sub Klasifikasi Surat', 'Tanggal Angka', 'Tanggal Romawi', 'Bulan Angka', 'Bulan Romawi', 'Tahun', 'Pemisah (-)', 'Pemisah (/)', 'Pemisah (.)', ''])->nullable();
            $table->enum('digit_7', ['No Urut Bulanan', 'No Urut Tahunan', 'Kode Klasifikasi Surat', 'Kode Sub Klasifikasi Surat', 'Tanggal Angka', 'Tanggal Romawi', 'Bulan Angka', 'Bulan Romawi', 'Tahun', 'Pemisah (-)', 'Pemisah (/)', 'Pemisah (.)', ''])->nullable();
            $table->enum('digit_8', ['No Urut Bulanan', 'No Urut Tahunan', 'Kode Klasifikasi Surat', 'Kode Sub Klasifikasi Surat', 'Tanggal Angka', 'Tanggal Romawi', 'Bulan Angka', 'Bulan Romawi', 'Tahun', 'Pemisah (-)', 'Pemisah (/)', 'Pemisah (.)', ''])->nullable();
            $table->enum('digit_9', ['No Urut Bulanan', 'No Urut Tahunan', 'Kode Klasifikasi Surat', 'Kode Sub Klasifikasi Surat', 'Tanggal Angka', 'Tanggal Romawi', 'Bulan Angka', 'Bulan Romawi', 'Tahun', 'Pemisah (-)', 'Pemisah (/)', 'Pemisah (.)', ''])->nullable();
            $table->enum('digit_10', ['No Urut Bulanan', 'No Urut Tahunan', 'Kode Klasifikasi Surat', 'Kode Sub Klasifikasi Surat', 'Tanggal Angka', 'Tanggal Romawi', 'Bulan Angka', 'Bulan Romawi', 'Tahun', 'Pemisah (-)', 'Pemisah (/)', 'Pemisah (.)', ''])->nullable();
            $table->enum('digit_11', ['No Urut Bulanan', 'No Urut Tahunan', 'Kode Klasifikasi Surat', 'Kode Sub Klasifikasi Surat', 'Tanggal Angka', 'Tanggal Romawi', 'Bulan Angka', 'Bulan Romawi', 'Tahun', 'Pemisah (-)', 'Pemisah (/)', 'Pemisah (.)', ''])->nullable();
            $table->enum('digit_12', ['No Urut Bulanan', 'No Urut Tahunan', 'Kode Klasifikasi Surat', 'Kode Sub Klasifikasi Surat', 'Tanggal Angka', 'Tanggal Romawi', 'Bulan Angka', 'Bulan Romawi', 'Tahun', 'Pemisah (-)', 'Pemisah (/)', 'Pemisah (.)', ''])->nullable();
            $table->enum('digit_13', ['No Urut Bulanan', 'No Urut Tahunan', 'Kode Klasifikasi Surat', 'Kode Sub Klasifikasi Surat', 'Tanggal Angka', 'Tanggal Romawi', 'Bulan Angka', 'Bulan Romawi', 'Tahun', 'Pemisah (-)', 'Pemisah (/)', 'Pemisah (.)', ''])->nullable();
            $table->enum('digit_14', ['No Urut Bulanan', 'No Urut Tahunan', 'Kode Klasifikasi Surat', 'Kode Sub Klasifikasi Surat', 'Tanggal Angka', 'Tanggal Romawi', 'Bulan Angka', 'Bulan Romawi', 'Tahun', 'Pemisah (-)', 'Pemisah (/)', 'Pemisah (.)', ''])->nullable();
            $table->enum('digit_15', ['No Urut Bulanan', 'No Urut Tahunan', 'Kode Klasifikasi Surat', 'Kode Sub Klasifikasi Surat', 'Tanggal Angka', 'Tanggal Romawi', 'Bulan Angka', 'Bulan Romawi', 'Tahun', 'Pemisah (-)', 'Pemisah (/)', 'Pemisah (.)', ''])->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('surat_keluar_set_nomor');
    }
}
