<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToKasiftTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('kasift', function (Blueprint $table) {
            $table->foreign(['id'], 'kasift_ibfk_1')->references(['id'])->on('pegawai')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('kasift', function (Blueprint $table) {
            $table->dropForeign('kasift_ibfk_1');
        });
    }
}
