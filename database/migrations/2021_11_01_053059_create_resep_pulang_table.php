<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateResepPulangTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('resep_pulang', function (Blueprint $table) {
            $table->string('no_rawat', 17)->index('no_rawat');
            $table->string('kode_brng', 15)->index('kode_brng');
            $table->double('jml_barang');
            $table->double('harga');
            $table->double('total');
            $table->string('dosis', 20);
            $table->date('tanggal');
            $table->time('jam');
            $table->string('kd_bangsal', 5)->index('kd_bangsal');
            $table->string('no_batch', 20);
            $table->string('no_faktur', 20);

            $table->primary(['no_rawat', 'kode_brng', 'tanggal', 'jam', 'no_batch', 'no_faktur']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('resep_pulang');
    }
}
