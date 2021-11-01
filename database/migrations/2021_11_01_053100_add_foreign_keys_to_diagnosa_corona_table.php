<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToDiagnosaCoronaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('diagnosa_corona', function (Blueprint $table) {
            $table->foreign(['no_rkm_medis'], 'diagnosa_corona_ibfk_1')->references(['no_rkm_medis'])->on('pasien_corona')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('diagnosa_corona', function (Blueprint $table) {
            $table->dropForeign('diagnosa_corona_ibfk_1');
        });
    }
}
