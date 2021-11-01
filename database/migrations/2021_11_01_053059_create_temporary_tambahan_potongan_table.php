<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTemporaryTambahanPotonganTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('temporary_tambahan_potongan', function (Blueprint $table) {
            $table->string('no_rawat', 17);
            $table->string('nama_tambahan', 100);
            $table->double('biaya');
            $table->string('status', 30);

            $table->primary(['no_rawat', 'nama_tambahan', 'status']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('temporary_tambahan_potongan');
    }
}
