<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToSetpenjualanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('setpenjualan', function (Blueprint $table) {
            $table->foreign(['kdjns'], 'setpenjualan_ibfk_1')->references(['kdjns'])->on('jenis')->onUpdate('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('setpenjualan', function (Blueprint $table) {
            $table->dropForeign('setpenjualan_ibfk_1');
        });
    }
}
