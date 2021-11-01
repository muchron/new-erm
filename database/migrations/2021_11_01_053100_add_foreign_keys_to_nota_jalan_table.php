<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToNotaJalanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('nota_jalan', function (Blueprint $table) {
            $table->foreign(['no_rawat'], 'nota_jalan_ibfk_1')->references(['no_rawat'])->on('reg_periksa')->onUpdate('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('nota_jalan', function (Blueprint $table) {
            $table->dropForeign('nota_jalan_ibfk_1');
        });
    }
}
