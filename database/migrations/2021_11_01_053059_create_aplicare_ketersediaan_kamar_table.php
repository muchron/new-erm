<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAplicareKetersediaanKamarTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aplicare_ketersediaan_kamar', function (Blueprint $table) {
            $table->string('kode_kelas_aplicare', 15)->default('');
            $table->char('kd_bangsal', 5)->default('')->index('kd_bangsal');
            $table->enum('kelas', ['Kelas 1', 'Kelas 2', 'Kelas 3', 'Kelas Utama', 'Kelas VIP', 'Kelas VVIP'])->default('Kelas 1');
            $table->integer('kapasitas')->nullable()->index('kapasitas');
            $table->integer('tersedia')->nullable()->index('tersedia');
            $table->integer('tersediapria')->nullable()->index('tersediapria');
            $table->integer('tersediawanita')->nullable()->index('tersediawanita');
            $table->integer('tersediapriawanita')->nullable()->index('tersediapriawanita');

            $table->primary(['kode_kelas_aplicare', 'kd_bangsal', 'kelas']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('aplicare_ketersediaan_kamar');
    }
}
