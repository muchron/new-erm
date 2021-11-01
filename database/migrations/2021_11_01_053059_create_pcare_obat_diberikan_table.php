<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePcareObatDiberikanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pcare_obat_diberikan', function (Blueprint $table) {
            $table->string('no_rawat', 17)->index('no_rawat');
            $table->string('noKunjungan', 40);
            $table->string('kdObatSK', 10)->nullable();
            $table->date('tgl_perawatan');
            $table->time('jam');
            $table->string('kode_brng', 15)->index('kode_brng');
            $table->string('no_batch', 20);
            $table->string('no_faktur', 20);

            $table->primary(['no_rawat', 'noKunjungan', 'tgl_perawatan', 'jam', 'kode_brng', 'no_batch', 'no_faktur']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pcare_obat_diberikan');
    }
}
