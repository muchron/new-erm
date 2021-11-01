<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePegawaiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pegawai', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('nik', 20)->unique('nik_2');
            $table->string('nama', 50)->index('nama');
            $table->enum('jk', ['Pria', 'Wanita'])->index('jk');
            $table->string('jbtn', 25)->index('jbtn');
            $table->string('jnj_jabatan', 5)->index('jnj_jabatan');
            $table->string('kode_kelompok', 3)->index('kode_kelompok');
            $table->string('kode_resiko', 3)->index('kode_resiko');
            $table->string('kode_emergency', 3)->index('kode_emergency');
            $table->char('departemen', 4)->index('departemen');
            $table->string('bidang', 15)->index('bidang');
            $table->char('stts_wp', 5)->index('stts_wp');
            $table->char('stts_kerja', 3)->index('stts_kerja');
            $table->string('npwp', 15)->index('npwp');
            $table->string('pendidikan', 80)->index('pendidikan');
            $table->double('gapok')->index('gapok');
            $table->string('tmp_lahir', 20)->index('tmp_lahir');
            $table->date('tgl_lahir')->index('tgl_lahir');
            $table->string('alamat', 60)->index('alamat');
            $table->string('kota', 20)->index('kota');
            $table->date('mulai_kerja')->index('mulai_kerja');
            $table->enum('ms_kerja', ['<1', 'PT', 'FT>1'])->index('ms_kerja');
            $table->char('indexins', 4)->index('indexins');
            $table->string('bpd', 50)->index('bpd');
            $table->string('rekening', 25)->index('rekening');
            $table->enum('stts_aktif', ['AKTIF', 'CUTI', 'KELUAR', 'TENAGA LUAR'])->index('stts_aktif');
            $table->tinyInteger('wajibmasuk')->index('wajibmasuk');
            $table->double('pengurang')->index('pengurang');
            $table->tinyInteger('indek')->index('indek');
            $table->date('mulai_kontrak')->nullable()->index('mulai_kontrak');
            $table->integer('cuti_diambil')->index('cuti_diambil');
            $table->double('dankes')->index('dankes');
            $table->string('photo', 500)->nullable();
            $table->string('no_ktp', 20);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pegawai');
    }
}
