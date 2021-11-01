<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetailPeriksaLabTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detail_periksa_lab', function (Blueprint $table) {
            $table->string('no_rawat', 17);
            $table->string('kd_jenis_prw', 15)->index('kd_jenis_prw');
            $table->date('tgl_periksa')->index('tgl_periksa');
            $table->time('jam')->index('jam');
            $table->integer('id_template')->index('id_template');
            $table->string('nilai', 60)->index('nilai');
            $table->string('nilai_rujukan', 30)->index('nilai_rujukan');
            $table->string('keterangan', 60)->index('keterangan');
            $table->double('bagian_rs')->index('bagian_rs');
            $table->double('bhp')->index('bhp');
            $table->double('bagian_perujuk')->index('bagian_perujuk');
            $table->double('bagian_dokter')->index('bagian_dokter');
            $table->double('bagian_laborat')->index('bagian_laborat');
            $table->double('kso')->nullable()->index('kso');
            $table->double('menejemen')->nullable()->index('menejemen');
            $table->double('biaya_item')->index('biaya_item');

            $table->primary(['no_rawat', 'kd_jenis_prw', 'tgl_periksa', 'jam', 'id_template']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detail_periksa_lab');
    }
}
