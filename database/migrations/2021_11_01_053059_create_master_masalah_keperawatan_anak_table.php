<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMasterMasalahKeperawatanAnakTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('master_masalah_keperawatan_anak', function (Blueprint $table) {
            $table->string('kode_masalah', 3)->primary();
            $table->string('nama_masalah', 100)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('master_masalah_keperawatan_anak');
    }
}
