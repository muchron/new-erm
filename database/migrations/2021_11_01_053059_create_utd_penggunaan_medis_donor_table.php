<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUtdPenggunaanMedisDonorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('utd_penggunaan_medis_donor', function (Blueprint $table) {
            $table->string('no_donor', 15)->default('');
            $table->string('kode_brng', 15)->default('')->index('kode_brng');
            $table->double('jml')->nullable();
            $table->double('harga')->nullable();
            $table->double('total')->nullable();

            $table->primary(['no_donor', 'kode_brng']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('utd_penggunaan_medis_donor');
    }
}
