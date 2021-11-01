<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMutasibarangTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mutasibarang', function (Blueprint $table) {
            $table->string('kode_brng', 15)->index('kode_brng');
            $table->double('jml')->index('jml');
            $table->double('harga');
            $table->char('kd_bangsaldari', 5)->index('kd_bangsaldari');
            $table->char('kd_bangsalke', 5)->index('kd_bangsalke');
            $table->dateTime('tanggal');
            $table->string('keterangan', 60)->index('keterangan');
            $table->string('no_batch', 20);
            $table->string('no_faktur', 20);

            $table->primary(['kode_brng', 'kd_bangsaldari', 'kd_bangsalke', 'tanggal', 'no_batch', 'no_faktur']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mutasibarang');
    }
}
