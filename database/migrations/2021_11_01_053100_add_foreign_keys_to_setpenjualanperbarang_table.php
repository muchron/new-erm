<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToSetpenjualanperbarangTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('setpenjualanperbarang', function (Blueprint $table) {
            $table->foreign(['kode_brng'], 'setpenjualanperbarang_ibfk_1')->references(['kode_brng'])->on('databarang')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('setpenjualanperbarang', function (Blueprint $table) {
            $table->dropForeign('setpenjualanperbarang_ibfk_1');
        });
    }
}
