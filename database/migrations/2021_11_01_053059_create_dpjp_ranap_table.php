<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDpjpRanapTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dpjp_ranap', function (Blueprint $table) {
            $table->string('no_rawat', 17);
            $table->string('kd_dokter', 20)->index('dpjp_ranap_ibfk_2');

            $table->primary(['no_rawat', 'kd_dokter']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dpjp_ranap');
    }
}
