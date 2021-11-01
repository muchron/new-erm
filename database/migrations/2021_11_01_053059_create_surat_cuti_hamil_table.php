<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSuratCutiHamilTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('surat_cuti_hamil', function (Blueprint $table) {
            $table->string('no_rawat', 17)->primary();
            $table->string('keterangan_hamil', 25)->nullable();
            $table->date('terhitung_mulai')->nullable();
            $table->date('perkiraan_lahir')->nullable();
            $table->string('no_surat', 20)->nullable()->unique('no_surat');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('surat_cuti_hamil');
    }
}
