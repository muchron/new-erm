<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSetAlamatPasienTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('set_alamat_pasien', function (Blueprint $table) {
            $table->enum('kelurahan', ['true', 'false'])->nullable();
            $table->enum('kecamatan', ['true', 'false'])->nullable();
            $table->enum('kabupaten', ['true', 'false'])->nullable();
            $table->enum('propinsi', ['true', 'false']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('set_alamat_pasien');
    }
}
