<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSetKelengkapanDataPasienTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('set_kelengkapan_data_pasien', function (Blueprint $table) {
            $table->enum('no_ktp', ['Yes', 'No'])->nullable();
            $table->tinyInteger('p_no_ktp')->nullable();
            $table->enum('tmp_lahir', ['Yes', 'No'])->nullable();
            $table->tinyInteger('p_tmp_lahir')->nullable();
            $table->enum('nm_ibu', ['Yes', 'No'])->nullable();
            $table->tinyInteger('p_nm_ibu')->nullable();
            $table->enum('alamat', ['Yes', 'No'])->nullable();
            $table->tinyInteger('p_alamat')->nullable();
            $table->enum('pekerjaan', ['Yes', 'No'])->nullable();
            $table->tinyInteger('p_pekerjaan')->nullable();
            $table->enum('no_tlp', ['Yes', 'No'])->nullable();
            $table->tinyInteger('p_no_tlp')->nullable();
            $table->enum('umur', ['Yes', 'No'])->nullable();
            $table->tinyInteger('p_umur')->nullable();
            $table->enum('namakeluarga', ['Yes', 'No'])->nullable();
            $table->tinyInteger('p_namakeluarga')->nullable();
            $table->enum('no_peserta', ['Yes', 'No'])->nullable();
            $table->tinyInteger('p_no_peserta')->nullable();
            $table->enum('kelurahan', ['Yes', 'No'])->nullable();
            $table->tinyInteger('p_kelurahan')->nullable();
            $table->enum('kecamatan', ['Yes', 'No'])->nullable();
            $table->tinyInteger('p_kecamatan')->nullable();
            $table->enum('kabupaten', ['Yes', 'No'])->nullable();
            $table->tinyInteger('p_kabupaten')->nullable();
            $table->enum('pekerjaanpj', ['Yes', 'No'])->nullable();
            $table->tinyInteger('p_pekerjaanpj')->nullable();
            $table->enum('alamatpj', ['Yes', 'No'])->nullable();
            $table->tinyInteger('p_alamatpj')->nullable();
            $table->enum('kelurahanpj', ['Yes', 'No'])->nullable();
            $table->tinyInteger('p_kelurahanpj')->nullable();
            $table->enum('kecamatanpj', ['Yes', 'No'])->nullable();
            $table->tinyInteger('p_kecamatanpj')->nullable();
            $table->enum('kabupatenpj', ['Yes', 'No'])->nullable();
            $table->tinyInteger('p_kabupatenpj')->nullable();
            $table->enum('propinsi', ['Yes', 'No']);
            $table->tinyInteger('p_propinsi');
            $table->enum('propinsipj', ['Yes', 'No']);
            $table->tinyInteger('p_propinsipj');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('set_kelengkapan_data_pasien');
    }
}
