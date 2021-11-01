<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToPasienMatiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('pasien_mati', function (Blueprint $table) {
            $table->foreign(['no_rkm_medis'], 'pasien_mati_ibfk_1')->references(['no_rkm_medis'])->on('pasien')->onUpdate('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('pasien_mati', function (Blueprint $table) {
            $table->dropForeign('pasien_mati_ibfk_1');
        });
    }
}
