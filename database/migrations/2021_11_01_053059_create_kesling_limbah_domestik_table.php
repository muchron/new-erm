<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKeslingLimbahDomestikTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kesling_limbah_domestik', function (Blueprint $table) {
            $table->string('nip', 20);
            $table->dateTime('tanggal');
            $table->double('jumlahlimbah')->nullable();
            $table->dateTime('tanggalangkut')->nullable();
            $table->string('keterangan', 50)->nullable();

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
        Schema::dropIfExists('kesling_limbah_domestik');
    }
}
