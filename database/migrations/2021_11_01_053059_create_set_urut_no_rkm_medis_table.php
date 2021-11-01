<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSetUrutNoRkmMedisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('set_urut_no_rkm_medis', function (Blueprint $table) {
            $table->enum('urutan', ['Straight', 'Middle', 'Terminal']);
            $table->enum('tahun', ['Yes', 'No']);
            $table->enum('bulan', ['Yes', 'No']);
            $table->enum('posisi_tahun_bulan', ['Depan', 'Belakang'])->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('set_urut_no_rkm_medis');
    }
}
