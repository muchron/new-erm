<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJnsPerawatanInapTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jns_perawatan_inap', function (Blueprint $table) {
            $table->string('kd_jenis_prw', 15)->primary();
            $table->string('nm_perawatan', 80)->nullable()->index('nm_perawatan');
            $table->char('kd_kategori', 5)->index('kd_kategori');
            $table->double('material')->nullable()->index('material');
            $table->double('bhp')->index('bhp');
            $table->double('tarif_tindakandr')->nullable()->index('tarif_tindakandr');
            $table->double('tarif_tindakanpr')->nullable()->index('tarif_tindakanpr');
            $table->double('kso')->nullable()->index('kso');
            $table->double('menejemen')->nullable()->index('menejemen');
            $table->double('total_byrdr')->nullable()->index('total_byrdr');
            $table->double('total_byrpr')->nullable()->index('total_byrpr');
            $table->double('total_byrdrpr')->index('total_byrdrpr');
            $table->char('kd_pj', 3)->index('kd_pj');
            $table->char('kd_bangsal', 5)->index('kd_bangsal');
            $table->enum('status', ['0', '1'])->index('status');
            $table->enum('kelas', ['-', 'Kelas 1', 'Kelas 2', 'Kelas 3', 'Kelas Utama', 'Kelas VIP', 'Kelas VVIP']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jns_perawatan_inap');
    }
}
