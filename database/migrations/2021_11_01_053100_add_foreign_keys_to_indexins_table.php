<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToIndexinsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('indexins', function (Blueprint $table) {
            $table->foreign(['dep_id'], 'indexins_ibfk_1')->references(['dep_id'])->on('departemen')->onUpdate('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('indexins', function (Blueprint $table) {
            $table->dropForeign('indexins_ibfk_1');
        });
    }
}
