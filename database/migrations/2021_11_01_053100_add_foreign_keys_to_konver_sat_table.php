<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToKonverSatTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('konver_sat', function (Blueprint $table) {
            $table->foreign(['kode_sat'], 'konver_sat_ibfk_1')->references(['kode_sat'])->on('kodesatuan')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('konver_sat', function (Blueprint $table) {
            $table->dropForeign('konver_sat_ibfk_1');
        });
    }
}
