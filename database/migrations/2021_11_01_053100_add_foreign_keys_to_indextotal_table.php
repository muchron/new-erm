<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToIndextotalTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('indextotal', function (Blueprint $table) {
            $table->foreign(['kdindex'], 'indextotal_ibfk_1')->references(['dep_id'])->on('departemen')->onUpdate('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('indextotal', function (Blueprint $table) {
            $table->dropForeign('indextotal_ibfk_1');
        });
    }
}
