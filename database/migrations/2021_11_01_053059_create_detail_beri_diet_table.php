<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetailBeriDietTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detail_beri_diet', function (Blueprint $table) {
            $table->string('no_rawat', 17)->index('no_rawat');
            $table->string('kd_kamar', 15)->index('kd_kamar');
            $table->date('tanggal')->index('tanggal');
            $table->enum('waktu', ['Pagi', 'Siang', 'Sore', 'Malam'])->index('waktu');
            $table->string('kd_diet', 3)->index('kd_diet');

            $table->primary(['no_rawat', 'kd_kamar', 'tanggal', 'waktu', 'kd_diet']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detail_beri_diet');
    }
}
