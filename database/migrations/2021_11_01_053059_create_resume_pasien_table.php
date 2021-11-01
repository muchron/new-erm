<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateResumePasienTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('resume_pasien', function (Blueprint $table) {
            $table->string('no_rawat', 17)->primary();
            $table->string('kd_dokter', 20)->index('kd_dokter');
            $table->text('keluhan_utama');
            $table->text('jalannya_penyakit');
            $table->text('pemeriksaan_penunjang');
            $table->text('hasil_laborat');
            $table->string('diagnosa_utama', 80);
            $table->string('kd_diagnosa_utama', 10);
            $table->string('diagnosa_sekunder', 80);
            $table->string('kd_diagnosa_sekunder', 10);
            $table->string('diagnosa_sekunder2', 80);
            $table->string('kd_diagnosa_sekunder2', 10);
            $table->string('diagnosa_sekunder3', 80);
            $table->string('kd_diagnosa_sekunder3', 10);
            $table->string('diagnosa_sekunder4', 80);
            $table->string('kd_diagnosa_sekunder4', 10);
            $table->string('prosedur_utama', 80);
            $table->string('kd_prosedur_utama', 8);
            $table->string('prosedur_sekunder', 80);
            $table->string('kd_prosedur_sekunder', 8);
            $table->string('prosedur_sekunder2', 80);
            $table->string('kd_prosedur_sekunder2', 8);
            $table->string('prosedur_sekunder3', 80);
            $table->string('kd_prosedur_sekunder3', 8);
            $table->enum('kondisi_pulang', ['Hidup', 'Meninggal']);
            $table->text('obat_pulang');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('resume_pasien');
    }
}
