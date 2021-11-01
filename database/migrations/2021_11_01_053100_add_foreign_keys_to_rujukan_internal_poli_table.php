<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToRujukanInternalPoliTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('rujukan_internal_poli', function (Blueprint $table) {
            $table->foreign(['no_rawat'], 'rujukan_internal_poli_ibfk_1')->references(['no_rawat'])->on('reg_periksa')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['kd_dokter'], 'rujukan_internal_poli_ibfk_2')->references(['kd_dokter'])->on('dokter')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['kd_poli'], 'rujukan_internal_poli_ibfk_3')->references(['kd_poli'])->on('poliklinik')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('rujukan_internal_poli', function (Blueprint $table) {
            $table->dropForeign('rujukan_internal_poli_ibfk_1');
            $table->dropForeign('rujukan_internal_poli_ibfk_2');
            $table->dropForeign('rujukan_internal_poli_ibfk_3');
        });
    }
}
