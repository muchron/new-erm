<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToInacbgNoklaimCoronaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('inacbg_noklaim_corona', function (Blueprint $table) {
            $table->foreign(['no_rawat'], 'inacbg_noklaim_corona_ibfk_1')->references(['no_rawat'])->on('reg_periksa')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('inacbg_noklaim_corona', function (Blueprint $table) {
            $table->dropForeign('inacbg_noklaim_corona_ibfk_1');
        });
    }
}
