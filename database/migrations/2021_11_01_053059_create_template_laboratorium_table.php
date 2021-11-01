<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTemplateLaboratoriumTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('template_laboratorium', function (Blueprint $table) {
            $table->string('kd_jenis_prw', 15)->index('kd_jenis_prw');
            $table->integer('id_template', true);
            $table->string('Pemeriksaan', 200)->index('Pemeriksaan');
            $table->string('satuan', 20)->index('satuan');
            $table->string('nilai_rujukan_ld', 30)->index('nilai_rujukan_ld');
            $table->string('nilai_rujukan_la', 30)->index('nilai_rujukan_la');
            $table->string('nilai_rujukan_pd', 30)->index('nilai_rujukan_pd');
            $table->string('nilai_rujukan_pa', 30)->index('nilai_rujukan_pa');
            $table->double('bagian_rs')->index('bagian_rs');
            $table->double('bhp')->index('bhp');
            $table->double('bagian_perujuk')->index('bagian_perujuk');
            $table->double('bagian_dokter')->index('bagian_dokter');
            $table->double('bagian_laborat')->index('bagian_laborat');
            $table->double('kso')->nullable()->index('kso');
            $table->double('menejemen')->nullable()->index('menejemen');
            $table->double('biaya_item')->index('biaya_item');
            $table->integer('urut')->nullable()->index('urut');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('template_laboratorium');
    }
}
