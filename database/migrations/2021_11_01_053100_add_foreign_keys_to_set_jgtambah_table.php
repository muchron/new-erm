<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToSetJgtambahTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('set_jgtambah', function (Blueprint $table) {
            $table->foreign(['pendidikan'], 'set_jgtambah_ibfk_1')->references(['tingkat'])->on('pendidikan')->onUpdate('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('set_jgtambah', function (Blueprint $table) {
            $table->dropForeign('set_jgtambah_ibfk_1');
        });
    }
}
