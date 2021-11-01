<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePerpustakaanBayarDendaHarianTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('perpustakaan_bayar_denda_harian', function (Blueprint $table) {
            $table->date('tgl_denda')->default('0000-00-00');
            $table->string('no_anggota', 10)->default('')->index('no_anggota');
            $table->string('no_inventaris', 20)->default('')->index('no_inventaris');
            $table->integer('keterlambatan')->nullable();
            $table->double('besar_denda')->nullable();

            $table->primary(['tgl_denda', 'no_anggota', 'no_inventaris']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('perpustakaan_bayar_denda_harian');
    }
}
