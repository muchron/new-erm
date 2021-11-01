<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTemplateUtdTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('template_utd', function (Blueprint $table) {
            $table->string('kd_jenis_prw', 15)->nullable()->index('kd_jenis_prw');
            $table->integer('id_template', true);
            $table->string('pemeriksaan', 200)->nullable();
            $table->string('nilai_rujukan', 30);
            $table->double('bagian_rs')->nullable();
            $table->double('bhp')->nullable();
            $table->double('bagian_perujuk')->nullable();
            $table->double('bagian_dokter')->nullable();
            $table->double('petugas_utd')->nullable();
            $table->double('kso')->nullable();
            $table->double('menejemen')->nullable();
            $table->double('biaya_item')->nullable();
            $table->tinyInteger('urut')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('template_utd');
    }
}
