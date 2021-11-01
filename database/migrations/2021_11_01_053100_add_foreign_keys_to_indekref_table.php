<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToIndekrefTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('indekref', function (Blueprint $table) {
            $table->foreign(['kdindex'], 'indekref_ibfk_1')->references(['dep_id'])->on('departemen')->onUpdate('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('indekref', function (Blueprint $table) {
            $table->dropForeign('indekref_ibfk_1');
        });
    }
}
