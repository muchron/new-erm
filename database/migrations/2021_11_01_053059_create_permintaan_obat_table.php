<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePermintaanObatTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('permintaan_obat', function (Blueprint $table) {
            $table->date('tanggal');
            $table->time('jam');
            $table->string('no_rawat', 17)->index('no_rawat');
            $table->string('kode_brng', 15)->index('kode_brng');

            $table->primary(['tanggal', 'jam', 'no_rawat', 'kode_brng']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('permintaan_obat');
    }
}
