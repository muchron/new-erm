<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePasienTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pasien', function (Blueprint $table) {
            $table->string('no_rkm_medis', 15)->primary();
            $table->string('nm_pasien', 40)->nullable()->index('nm_pasien');
            $table->string('no_ktp', 20)->nullable()->index('no_ktp');
            $table->enum('jk', ['L', 'P'])->nullable();
            $table->string('tmp_lahir', 15)->nullable();
            $table->date('tgl_lahir')->nullable();
            $table->string('nm_ibu', 40);
            $table->string('alamat', 200)->nullable()->index('alamat');
            $table->enum('gol_darah', ['A', 'B', 'O', 'AB', '-'])->nullable();
            $table->string('pekerjaan', 35)->nullable();
            $table->enum('stts_nikah', ['BELUM MENIKAH', 'MENIKAH', 'JANDA', 'DUDHA', 'JOMBLO'])->nullable();
            $table->string('agama', 12)->nullable();
            $table->date('tgl_daftar')->nullable();
            $table->string('no_tlp', 40)->nullable();
            $table->string('umur', 20);
            $table->enum('pnd', ['TS', 'TK', 'SD', 'SMP', 'SMA', 'SLTA/SEDERAJAT', 'D1', 'D2', 'D3', 'D4', 'S1', 'S2', 'S3', '-']);
            $table->enum('keluarga', ['AYAH', 'IBU', 'ISTRI', 'SUAMI', 'SAUDARA', 'ANAK'])->nullable();
            $table->string('namakeluarga', 50);
            $table->char('kd_pj', 3)->index('kd_pj');
            $table->string('no_peserta', 25)->nullable()->index('no_peserta');
            $table->integer('kd_kel')->index('kd_kel_2');
            $table->integer('kd_kec')->index('kd_kec');
            $table->integer('kd_kab')->index('kd_kab');
            $table->string('pekerjaanpj', 35);
            $table->string('alamatpj', 100);
            $table->string('kelurahanpj', 60);
            $table->string('kecamatanpj', 60);
            $table->string('kabupatenpj', 60);
            $table->string('perusahaan_pasien', 8)->index('perusahaan_pasien');
            $table->integer('suku_bangsa')->index('suku_bangsa');
            $table->integer('bahasa_pasien')->index('bahasa_pasien');
            $table->integer('cacat_fisik')->index('cacat_fisik');
            $table->string('email', 50);
            $table->string('nip', 30);
            $table->integer('kd_prop')->index('kd_prop');
            $table->string('propinsipj', 30);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pasien');
    }
}
