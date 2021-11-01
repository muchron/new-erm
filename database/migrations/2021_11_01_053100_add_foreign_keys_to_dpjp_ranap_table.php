<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToDpjpRanapTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('dpjp_ranap', function (Blueprint $table) {
            $table->foreign(['no_rawat'], 'dpjp_ranap_ibfk_1')->references(['no_rawat'])->on('reg_periksa')->onUpdate('CASCADE');
            $table->foreign(['kd_dokter'], 'dpjp_ranap_ibfk_2')->references(['kd_dokter'])->on('dokter')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('dpjp_ranap', function (Blueprint $table) {
            $table->dropForeign('dpjp_ranap_ibfk_1');
            $table->dropForeign('dpjp_ranap_ibfk_2');
        });
    }
}
