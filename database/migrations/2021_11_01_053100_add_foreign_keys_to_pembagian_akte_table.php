<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToPembagianAkteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('pembagian_akte', function (Blueprint $table) {
            $table->foreign(['id'], 'pembagian_akte_ibfk_1')->references(['id'])->on('pegawai')->onUpdate('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('pembagian_akte', function (Blueprint $table) {
            $table->dropForeign('pembagian_akte_ibfk_1');
        });
    }
}
