<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRujukanInternalPoliTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rujukan_internal_poli', function (Blueprint $table) {
            $table->string('no_rawat', 17);
            $table->string('kd_dokter', 20)->index('kd_dokter');
            $table->string('kd_poli', 5)->nullable()->index('kd_poli');

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
        Schema::dropIfExists('rujukan_internal_poli');
    }
}
