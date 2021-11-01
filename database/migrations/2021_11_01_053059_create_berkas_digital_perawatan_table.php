<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBerkasDigitalPerawatanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('berkas_digital_perawatan', function (Blueprint $table) {
            $table->string('no_rawat', 17);
            $table->string('kode', 10)->index('kode');
            $table->string('lokasi_file', 600);

            $table->primary(['no_rawat', 'kode', 'lokasi_file']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('berkas_digital_perawatan');
    }
}
