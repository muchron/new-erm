<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToRujukTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('rujuk', function (Blueprint $table) {
            $table->foreign(['kd_dokter'], 'rujuk_ibfk_1')->references(['kd_dokter'])->on('dokter')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['no_rawat'], 'rujuk_ibfk_2')->references(['no_rawat'])->on('reg_periksa')->onUpdate('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('rujuk', function (Blueprint $table) {
            $table->dropForeign('rujuk_ibfk_1');
            $table->dropForeign('rujuk_ibfk_2');
        });
    }
}
