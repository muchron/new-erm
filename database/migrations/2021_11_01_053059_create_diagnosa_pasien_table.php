<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDiagnosaPasienTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('diagnosa_pasien', function (Blueprint $table) {
            $table->string('no_rawat', 17)->index('no_rawat');
            $table->string('kd_penyakit', 10)->index('kd_penyakit');
            $table->enum('status', ['Ralan', 'Ranap'])->index('status');
            $table->tinyInteger('prioritas')->index('prioritas');
            $table->enum('status_penyakit', ['Lama', 'Baru'])->nullable();

            $table->primary(['no_rawat', 'kd_penyakit', 'status']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('diagnosa_pasien');
    }
}
