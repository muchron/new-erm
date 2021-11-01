<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUtdPenggunaanMedisPenyerahanDarahTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('utd_penggunaan_medis_penyerahan_darah', function (Blueprint $table) {
            $table->string('no_penyerahan', 17);
            $table->string('kode_brng', 15)->default('')->index('kode_brng');
            $table->double('jml')->nullable();
            $table->double('harga')->nullable();
            $table->double('total')->nullable();

            $table->primary(['no_penyerahan', 'kode_brng']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('utd_penggunaan_medis_penyerahan_darah');
    }
}
