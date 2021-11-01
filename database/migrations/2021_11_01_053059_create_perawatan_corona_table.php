<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePerawatanCoronaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('perawatan_corona', function (Blueprint $table) {
            $table->string('no_rawat', 17)->primary();
            $table->enum('pemulasaraan_jenazah', ['Tidak', 'Ya'])->nullable();
            $table->enum('kantong_jenazah', ['Tidak', 'Ya'])->nullable();
            $table->enum('peti_jenazah', ['Tidak', 'Ya'])->nullable();
            $table->enum('plastik_erat', ['Tidak', 'Ya'])->nullable();
            $table->enum('desinfektan_jenazah', ['Tidak', 'Ya'])->nullable();
            $table->enum('mobil_jenazah', ['Tidak', 'Ya'])->nullable();
            $table->enum('desinfektan_mobil_jenazah', ['Tidak', 'Ya'])->nullable();
            $table->enum('covid19_status_cd', ['ODP', 'PDP', 'Positif'])->nullable();
            $table->string('nomor_kartu_t', 30)->nullable();
            $table->integer('episodes1')->nullable();
            $table->integer('episodes2')->nullable();
            $table->integer('episodes3')->nullable();
            $table->integer('episodes4')->nullable();
            $table->integer('episodes5')->nullable();
            $table->integer('episodes6')->nullable();
            $table->enum('covid19_cc_ind', ['Tidak', 'Ya'])->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('perawatan_corona');
    }
}
