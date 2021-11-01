<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHemodialisaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hemodialisa', function (Blueprint $table) {
            $table->string('no_rawat', 17)->index('no_rawat');
            $table->dateTime('tanggal');
            $table->string('kd_dokter', 20)->nullable()->index('kd_dokter');
            $table->string('lama', 5)->nullable();
            $table->string('akses', 30)->nullable();
            $table->string('dialist', 30)->nullable();
            $table->string('transfusi', 5)->nullable();
            $table->string('penarikan', 5)->nullable();
            $table->string('qb', 5)->nullable();
            $table->string('qd', 5)->nullable();
            $table->string('ureum', 10)->nullable();
            $table->string('hb', 10)->nullable();
            $table->string('hbsag', 10)->nullable();
            $table->string('creatinin', 10)->nullable();
            $table->string('hiv', 10)->nullable();
            $table->string('hcv', 10)->nullable();
            $table->string('lain', 200)->nullable();
            $table->string('kd_penyakit', 10)->nullable()->index('kd_penyakit');

            $table->primary(['no_rawat', 'tanggal']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hemodialisa');
    }
}
