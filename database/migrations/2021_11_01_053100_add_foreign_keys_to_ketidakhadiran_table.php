<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToKetidakhadiranTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('ketidakhadiran', function (Blueprint $table) {
            $table->foreign(['id'], 'ketidakhadiran_ibfk_1')->references(['id'])->on('pegawai')->onUpdate('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('ketidakhadiran', function (Blueprint $table) {
            $table->dropForeign('ketidakhadiran_ibfk_1');
        });
    }
}
