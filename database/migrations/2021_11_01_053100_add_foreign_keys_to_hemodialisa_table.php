<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToHemodialisaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('hemodialisa', function (Blueprint $table) {
            $table->foreign(['no_rawat'], 'hemodialisa_ibfk_1')->references(['no_rawat'])->on('reg_periksa')->onUpdate('CASCADE');
            $table->foreign(['kd_penyakit'], 'hemodialisa_ibfk_2')->references(['kd_penyakit'])->on('penyakit')->onUpdate('CASCADE');
            $table->foreign(['kd_dokter'], 'hemodialisa_ibfk_3')->references(['kd_dokter'])->on('dokter')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('hemodialisa', function (Blueprint $table) {
            $table->dropForeign('hemodialisa_ibfk_1');
            $table->dropForeign('hemodialisa_ibfk_2');
            $table->dropForeign('hemodialisa_ibfk_3');
        });
    }
}
