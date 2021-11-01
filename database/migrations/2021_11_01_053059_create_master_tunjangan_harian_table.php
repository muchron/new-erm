<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMasterTunjanganHarianTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('master_tunjangan_harian', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('nama', 40)->index('nama');
            $table->double('tnj')->index('tnj');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('master_tunjangan_harian');
    }
}
