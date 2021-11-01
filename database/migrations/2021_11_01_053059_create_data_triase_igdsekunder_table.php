<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDataTriaseIgdsekunderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_triase_igdsekunder', function (Blueprint $table) {
            $table->string('no_rawat', 17)->primary();
            $table->string('anamnesa_singkat', 400);
            $table->string('catatan', 100);
            $table->enum('plan', ['Zona Kuning', 'Zona Hijau']);
            $table->dateTime('tanggaltriase');
            $table->string('kd_dokter', 20)->index('nip');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('data_triase_igdsekunder');
    }
}
