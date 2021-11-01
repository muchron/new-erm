<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToPenguranganBiayaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('pengurangan_biaya', function (Blueprint $table) {
            $table->foreign(['no_rawat'], 'pengurangan_biaya_ibfk_1')->references(['no_rawat'])->on('reg_periksa')->onUpdate('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('pengurangan_biaya', function (Blueprint $table) {
            $table->dropForeign('pengurangan_biaya_ibfk_1');
        });
    }
}
