<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToSubrekeningTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('subrekening', function (Blueprint $table) {
            $table->foreign(['kd_rek'], 'subrekening_ibfk_1')->references(['kd_rek'])->on('rekening')->onUpdate('CASCADE');
            $table->foreign(['kd_rek2'], 'subrekening_ibfk_2')->references(['kd_rek'])->on('rekening')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('subrekening', function (Blueprint $table) {
            $table->dropForeign('subrekening_ibfk_1');
            $table->dropForeign('subrekening_ibfk_2');
        });
    }
}
