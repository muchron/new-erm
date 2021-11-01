<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSuratsakitTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('suratsakit', function (Blueprint $table) {
            $table->string('no_surat', 17)->primary();
            $table->string('no_rawat', 17)->nullable()->index('no_rawat');
            $table->date('tanggalawal')->nullable();
            $table->date('tanggalakhir')->nullable();
            $table->string('lamasakit', 20)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('suratsakit');
    }
}
