<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKamarTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kamar', function (Blueprint $table) {
            $table->string('kd_kamar', 15)->primary();
            $table->char('kd_bangsal', 5)->nullable()->index('kd_bangsal');
            $table->double('trf_kamar')->nullable()->index('trf_kamar');
            $table->enum('status', ['ISI', 'KOSONG', 'DIBERSIHKAN', 'DIBOOKING'])->nullable()->index('status');
            $table->enum('kelas', ['Kelas 1', 'Kelas 2', 'Kelas 3', 'Kelas Utama', 'Kelas VIP', 'Kelas VVIP'])->nullable()->index('kelas');
            $table->enum('statusdata', ['0', '1'])->nullable()->index('statusdata');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kamar');
    }
}
