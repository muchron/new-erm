<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToPembagianTuslahTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('pembagian_tuslah', function (Blueprint $table) {
            $table->foreign(['id'], 'pembagian_tuslah_ibfk_1')->references(['id'])->on('pegawai')->onUpdate('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('pembagian_tuslah', function (Blueprint $table) {
            $table->dropForeign('pembagian_tuslah_ibfk_1');
        });
    }
}
