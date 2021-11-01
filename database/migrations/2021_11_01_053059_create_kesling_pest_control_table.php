<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKeslingPestControlTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kesling_pest_control', function (Blueprint $table) {
            $table->string('nip', 20);
            $table->dateTime('tanggal');
            $table->text('rincian_kegiatan')->nullable();
            $table->text('rekomendasi')->nullable();

            $table->primary(['nip', 'tanggal']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kesling_pest_control');
    }
}
