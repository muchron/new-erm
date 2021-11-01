<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePermintaanNonMedisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('permintaan_non_medis', function (Blueprint $table) {
            $table->string('no_permintaan', 20)->primary();
            $table->string('ruang', 50)->nullable();
            $table->string('nip', 20)->nullable()->index('nip');
            $table->date('tanggal')->nullable();
            $table->enum('status', ['Baru', 'Disetujui', 'Tidak Disetujui'])->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('permintaan_non_medis');
    }
}
