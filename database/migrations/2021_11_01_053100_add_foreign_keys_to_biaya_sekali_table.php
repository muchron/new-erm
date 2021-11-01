<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToBiayaSekaliTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('biaya_sekali', function (Blueprint $table) {
            $table->foreign(['kd_kamar'], 'biaya_sekali_ibfk_1')->references(['kd_kamar'])->on('kamar')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('biaya_sekali', function (Blueprint $table) {
            $table->dropForeign('biaya_sekali_ibfk_1');
        });
    }
}
