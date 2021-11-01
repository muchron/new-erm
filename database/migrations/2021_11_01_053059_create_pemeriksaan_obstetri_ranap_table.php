<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePemeriksaanObstetriRanapTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pemeriksaan_obstetri_ranap', function (Blueprint $table) {
            $table->string('no_rawat', 17);
            $table->date('tgl_perawatan');
            $table->time('jam_rawat');
            $table->string('tinggi_uteri', 5)->nullable();
            $table->enum('janin', ['Tunggal', 'Gemelli', '-'])->nullable();
            $table->string('letak', 50)->nullable();
            $table->enum('panggul', ['-', '5/5', '4/5', '3/5', '2/5', '1/5'])->nullable();
            $table->string('denyut', 5)->nullable();
            $table->enum('kontraksi', ['+', '-'])->nullable();
            $table->string('kualitas_mnt', 5)->nullable();
            $table->string('kualitas_dtk', 5)->nullable();
            $table->enum('fluksus', ['+', '-'])->nullable();
            $table->enum('albus', ['+', '-'])->nullable();
            $table->string('vulva', 50)->nullable();
            $table->string('portio', 50)->nullable();
            $table->enum('dalam', ['Kenyal', 'Lunak'])->nullable();
            $table->string('tebal', 5)->nullable();
            $table->enum('arah', ['depan', 'axial', 'belakang'])->nullable();
            $table->string('pembukaan', 50)->nullable();
            $table->string('penurunan', 50)->nullable();
            $table->string('denominator', 50);
            $table->enum('ketuban', ['-', '+'])->nullable();
            $table->enum('feto', ['Normal', 'Susp.CPD-FPD', 'CPD-FPD'])->nullable();

            $table->primary(['no_rawat', 'tgl_perawatan', 'jam_rawat']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pemeriksaan_obstetri_ranap');
    }
}
