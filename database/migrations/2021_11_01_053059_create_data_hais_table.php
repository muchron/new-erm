<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDataHaisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_hais', function (Blueprint $table) {
            $table->date('tanggal');
            $table->string('no_rawat', 17)->index('no_rawat');
            $table->integer('ETT')->nullable()->index('ETT');
            $table->integer('CVL')->nullable()->index('CVL');
            $table->integer('IVL')->nullable()->index('IVL');
            $table->integer('UC')->nullable()->index('UC');
            $table->integer('VAP')->nullable()->index('VAP');
            $table->integer('IAD')->nullable()->index('IAD');
            $table->integer('PLEB')->nullable()->index('PLEB');
            $table->integer('ISK')->nullable()->index('ISK');
            $table->integer('ILO')->index('ILO');
            $table->integer('HAP')->nullable();
            $table->integer('Tinea')->nullable();
            $table->integer('Scabies')->nullable();
            $table->enum('DEKU', ['IYA', 'TIDAK'])->nullable()->index('DEKU');
            $table->string('SPUTUM', 200)->nullable()->index('SPUTUM');
            $table->string('DARAH', 200)->nullable()->index('DARAH');
            $table->string('URINE', 200)->nullable()->index('URINE');
            $table->string('ANTIBIOTIK', 200)->nullable()->index('ANTIBIOTIK');
            $table->string('kd_kamar', 15)->nullable()->index('kd_kamar');

            $table->primary(['tanggal', 'no_rawat']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('data_hais');
    }
}
