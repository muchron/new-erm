<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePermintaanMedisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('permintaan_medis', function (Blueprint $table) {
            $table->string('no_permintaan', 20)->primary();
            $table->char('kd_bangsal', 5)->nullable()->index('kd_bangsal');
            $table->string('nip', 20)->nullable()->index('permintaan_medis_ibfk_2');
            $table->date('tanggal')->nullable();
            $table->enum('status', ['Baru', 'Disetujui', 'Tidak Disetujui'])->nullable();
            $table->char('kd_bangsaltujuan', 5)->index('kd_bangsaltujuan');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('permintaan_medis');
    }
}
