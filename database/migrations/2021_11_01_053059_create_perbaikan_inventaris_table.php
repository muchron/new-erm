<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePerbaikanInventarisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('perbaikan_inventaris', function (Blueprint $table) {
            $table->string('no_permintaan', 15)->primary();
            $table->date('tanggal');
            $table->string('uraian_kegiatan');
            $table->string('nip', 20)->index('nip');
            $table->enum('pelaksana', ['Teknisi Rumah Sakit', 'Teknisi Rujukan', 'Pihak ke III']);
            $table->double('biaya');
            $table->string('keterangan');
            $table->enum('status', ['Bisa Diperbaiki', 'Tidak Bisa Diperbaiki']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('perbaikan_inventaris');
    }
}
