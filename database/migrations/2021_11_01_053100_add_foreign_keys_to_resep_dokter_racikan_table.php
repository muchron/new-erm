<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToResepDokterRacikanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('resep_dokter_racikan', function (Blueprint $table) {
            $table->foreign(['no_resep'], 'resep_dokter_racikan_ibfk_1')->references(['no_resep'])->on('resep_obat')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['kd_racik'], 'resep_dokter_racikan_ibfk_2')->references(['kd_racik'])->on('metode_racik')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('resep_dokter_racikan', function (Blueprint $table) {
            $table->dropForeign('resep_dokter_racikan_ibfk_1');
            $table->dropForeign('resep_dokter_racikan_ibfk_2');
        });
    }
}
