<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKamarInapTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kamar_inap', function (Blueprint $table) {
            $table->string('no_rawat', 17)->default('');
            $table->string('kd_kamar', 15)->index('kd_kamar');
            $table->double('trf_kamar')->nullable()->index('trf_kamar');
            $table->string('diagnosa_awal', 100)->nullable()->index('diagnosa_awal');
            $table->string('diagnosa_akhir', 100)->nullable()->index('diagnosa_akhir');
            $table->date('tgl_masuk')->default('0000-00-00');
            $table->time('jam_masuk')->default('00:00:00');
            $table->date('tgl_keluar')->nullable()->index('tgl_keluar');
            $table->time('jam_keluar')->nullable()->index('jam_keluar');
            $table->double('lama')->nullable()->index('lama');
            $table->double('ttl_biaya')->nullable()->index('ttl_biaya');
            $table->enum('stts_pulang', ['Sehat', 'Rujuk', 'APS', '+', 'Meninggal', 'Sembuh', 'Membaik', 'Pulang Paksa', '-', 'Pindah Kamar', 'Status Belum Lengkap', 'Atas Persetujuan Dokter', 'Atas Permintaan Sendiri', 'Lain-lain'])->index('stts_pulang');

            $table->primary(['no_rawat', 'tgl_masuk', 'jam_masuk']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kamar_inap');
    }
}
