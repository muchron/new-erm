<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAsuhanGiziTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('asuhan_gizi', function (Blueprint $table) {
            $table->string('no_rawat', 17);
            $table->date('tanggal');
            $table->char('antropometri_bb', 5)->nullable();
            $table->char('antropometri_tb', 5)->nullable();
            $table->char('antropometri_imt', 5)->nullable();
            $table->char('antropometri_lla', 5)->nullable();
            $table->char('antropometri_tl', 5)->nullable();
            $table->char('antropometri_ulna', 5);
            $table->char('antropometri_bbideal', 5);
            $table->char('antropometri_bbperu', 5);
            $table->char('antropometri_tbperu', 5);
            $table->char('antropometri_bbpertb', 5);
            $table->char('antropometri_llaperu', 5);
            $table->string('biokimia', 100)->nullable();
            $table->string('fisik_klinis', 100)->nullable();
            $table->enum('alergi_telur', ['Ya', 'Tidak'])->nullable();
            $table->enum('alergi_susu_sapi', ['Ya', 'Tidak'])->nullable();
            $table->enum('alergi_kacang', ['Ya', 'Tidak'])->nullable();
            $table->enum('alergi_gluten', ['Ya', 'Tidak'])->nullable();
            $table->enum('alergi_udang', ['Ya', 'Tidak'])->nullable();
            $table->enum('alergi_ikan', ['Ya', 'Tidak'])->nullable();
            $table->enum('alergi_hazelnut', ['Ya', 'Tidak'])->nullable();
            $table->string('pola_makan', 100)->nullable();
            $table->string('riwayat_personal', 100)->nullable();
            $table->string('diagnosis', 100)->nullable();
            $table->string('intervensi_gizi', 100)->nullable();
            $table->string('monitoring_evaluasi', 100)->nullable();
            $table->string('nip', 20)->index('nip');

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
        Schema::dropIfExists('asuhan_gizi');
    }
}
