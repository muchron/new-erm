<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMonitoringAsuhanGiziTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('monitoring_asuhan_gizi', function (Blueprint $table) {
            $table->string('no_rawat', 17);
            $table->dateTime('tanggal');
            $table->string('monitoring', 200)->nullable();
            $table->string('evaluasi', 200)->nullable();
            $table->string('nip', 20)->nullable()->index('nip');

            $table->primary(['no_rawat', 'tanggal']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('monitoring_asuhan_gizi');
    }
}
