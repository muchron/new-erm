<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToSetInputParsialTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('set_input_parsial', function (Blueprint $table) {
            $table->foreign(['kd_pj'], 'set_input_parsial_ibfk_1')->references(['kd_pj'])->on('penjab')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('set_input_parsial', function (Blueprint $table) {
            $table->dropForeign('set_input_parsial_ibfk_1');
        });
    }
}
