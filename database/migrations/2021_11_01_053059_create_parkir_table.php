<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateParkirTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('parkir', function (Blueprint $table) {
            $table->string('nip', 20)->nullable()->index('kd_petugas');
            $table->string('nomer_kartu', 5)->nullable()->index('kd_barcode');
            $table->string('kd_parkir', 5)->nullable()->index('kd_parkir');
            $table->string('no_kendaraan', 15)->default('');
            $table->date('tgl_masuk')->default('0000-00-00');
            $table->time('jam_masuk')->default('00:00:00');
            $table->date('tgl_keluar')->nullable();
            $table->time('jam_keluar')->nullable();
            $table->integer('lama_parkir')->nullable();
            $table->double('ttl_biaya')->nullable();

            $table->primary(['no_kendaraan', 'tgl_masuk', 'jam_masuk']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('parkir');
    }
}
