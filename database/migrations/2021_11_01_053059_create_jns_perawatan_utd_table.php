<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJnsPerawatanUtdTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jns_perawatan_utd', function (Blueprint $table) {
            $table->string('kd_jenis_prw', 15)->default('')->primary();
            $table->string('nm_perawatan', 80)->nullable();
            $table->double('bagian_rs')->nullable();
            $table->double('bhp')->nullable();
            $table->double('tarif_perujuk')->nullable();
            $table->double('tarif_tindakan_dokter')->nullable();
            $table->double('tarif_tindakan_petugas')->nullable();
            $table->double('kso')->nullable();
            $table->double('manajemen')->nullable();
            $table->double('total_byr')->nullable();
            $table->char('kd_pj', 3)->nullable()->index('kd_pj');
            $table->enum('status', ['0', '1'])->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jns_perawatan_utd');
    }
}
