<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePcarePesertaKegiatanKelompokTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pcare_peserta_kegiatan_kelompok', function (Blueprint $table) {
            $table->string('eduId', 15);
            $table->string('no_rkm_medis', 15)->index('no_rkm_medis');

            $table->primary(['eduId', 'no_rkm_medis']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pcare_peserta_kegiatan_kelompok');
    }
}
