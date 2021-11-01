<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToJamJagaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('jam_jaga', function (Blueprint $table) {
            $table->foreign(['dep_id'], 'jam_jaga_ibfk_1')->references(['dep_id'])->on('departemen')->onUpdate('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('jam_jaga', function (Blueprint $table) {
            $table->dropForeign('jam_jaga_ibfk_1');
        });
    }
}
