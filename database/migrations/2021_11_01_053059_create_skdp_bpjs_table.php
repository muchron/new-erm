<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSkdpBpjsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('skdp_bpjs', function (Blueprint $table) {
            $table->year('tahun');
            $table->string('no_rkm_medis', 15)->nullable()->index('no_rkm_medis');
            $table->string('diagnosa', 50);
            $table->string('terapi', 50);
            $table->string('alasan1', 50)->nullable();
            $table->string('alasan2', 50)->nullable();
            $table->string('rtl1', 50)->nullable();
            $table->string('rtl2', 50)->nullable();
            $table->date('tanggal_datang')->nullable();
            $table->date('tanggal_rujukan');
            $table->string('no_antrian', 6);
            $table->string('kd_dokter', 20)->nullable()->index('kd_dokter');
            $table->enum('status', ['Menunggu', 'Sudah Periksa', 'Batal Periksa']);

            $table->primary(['tahun', 'no_antrian']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('skdp_bpjs');
    }
}
