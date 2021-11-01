<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMatrikAkunJnsPerawatanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('matrik_akun_jns_perawatan', function (Blueprint $table) {
            $table->string('kd_jenis_prw', 15)->primary();
            $table->string('pendapatan_tindakan', 15)->nullable()->index('pendapatan_tindakan');
            $table->string('beban_jasa_dokter', 15)->nullable()->index('beban_jasa_dokter');
            $table->string('utang_jasa_dokter', 15)->nullable()->index('utang_jasa_dokter');
            $table->string('beban_jasa_paramedis', 15)->nullable()->index('beban_jasa_paramedis');
            $table->string('utang_jasa_paramedis', 15)->nullable()->index('utang_jasa_paramedis');
            $table->string('beban_kso', 15)->nullable()->index('beban_kso');
            $table->string('utang_kso', 15)->nullable()->index('utang_kso');
            $table->string('hpp_persediaan', 15)->nullable()->index('hpp_persediaan');
            $table->string('persediaan_bhp', 15)->nullable()->index('persediaan_bhp');
            $table->string('beban_jasa_sarana', 15)->nullable()->index('beban_jasa_sarana');
            $table->string('utang_jasa_sarana', 15)->nullable()->index('utang_jasa_sarana');
            $table->string('beban_menejemen', 15)->nullable()->index('beban_menejemen');
            $table->string('utang_menejemen', 15)->nullable()->index('utang_menejemen');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('matrik_akun_jns_perawatan');
    }
}
