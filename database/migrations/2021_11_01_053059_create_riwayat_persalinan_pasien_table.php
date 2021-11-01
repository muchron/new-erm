<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRiwayatPersalinanPasienTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('riwayat_persalinan_pasien', function (Blueprint $table) {
            $table->string('no_rkm_medis', 15);
            $table->string('tgl_thn', 12);
            $table->string('tempat_persalinan', 30)->nullable();
            $table->string('usia_hamil', 20)->nullable();
            $table->string('jenis_persalinan', 20)->nullable();
            $table->string('penolong', 30)->nullable();
            $table->string('penyulit', 40)->nullable();
            $table->enum('jk', ['L', 'P'])->nullable();
            $table->string('bbpb', 10)->nullable();
            $table->string('keadaan', 40)->nullable();

            $table->primary(['no_rkm_medis', 'tgl_thn']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('riwayat_persalinan_pasien');
    }
}
