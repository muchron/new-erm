<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKeslingLimbahB3medisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kesling_limbah_b3medis', function (Blueprint $table) {
            $table->string('nip', 20);
            $table->dateTime('tanggal');
            $table->double('jmllimbah')->nullable();
            $table->string('tujuan_penyerahan', 50)->nullable();
            $table->string('bukti_dokumen', 20)->nullable();
            $table->double('sisa_di_tps')->nullable();

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
        Schema::dropIfExists('kesling_limbah_b3medis');
    }
}
