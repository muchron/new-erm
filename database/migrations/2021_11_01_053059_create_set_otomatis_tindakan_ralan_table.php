<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSetOtomatisTindakanRalanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('set_otomatis_tindakan_ralan', function (Blueprint $table) {
            $table->string('kd_dokter', 20)->index('kd_dokter');
            $table->string('kd_jenis_prw', 15)->index('kd_jenis_prw');
            $table->char('kd_pj', 3)->default('')->index('kd_pj');

            $table->primary(['kd_dokter', 'kd_jenis_prw', 'kd_pj']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('set_otomatis_tindakan_ralan');
    }
}
