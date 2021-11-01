<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCatatanPerawatanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('catatan_perawatan', function (Blueprint $table) {
            $table->date('tanggal')->nullable();
            $table->time('jam')->nullable();
            $table->string('no_rawat', 17)->nullable()->index('no_rawat');
            $table->string('kd_dokter', 20)->nullable()->index('kd_dokter');
            $table->string('catatan', 700)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('catatan_perawatan');
    }
}
