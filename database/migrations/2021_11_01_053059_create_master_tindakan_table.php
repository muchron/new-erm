<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMasterTindakanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('master_tindakan', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('nama', 50)->unique('nama');
            $table->double('jm')->index('jm');
            $table->enum('jns', ['Karyawan', 'dr umum', 'dr spesialis'])->index('jns');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('master_tindakan');
    }
}
