<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRetensiPasienTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('retensi_pasien', function (Blueprint $table) {
            $table->string('no_rkm_medis', 15)->nullable()->index('no_rkm_medis');
            $table->date('terakhir_daftar')->nullable();
            $table->date('tgl_retensi')->nullable();
            $table->string('lokasi_pdf', 500)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('retensi_pasien');
    }
}
