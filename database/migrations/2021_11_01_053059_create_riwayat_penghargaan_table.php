<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRiwayatPenghargaanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('riwayat_penghargaan', function (Blueprint $table) {
            $table->integer('id');
            $table->string('jenis', 30);
            $table->string('nama_penghargaan', 60);
            $table->date('tanggal');
            $table->string('instansi', 40);
            $table->string('pejabat_pemberi', 40);
            $table->string('berkas', 500)->nullable();

            $table->primary(['id', 'nama_penghargaan', 'tanggal']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('riwayat_penghargaan');
    }
}
