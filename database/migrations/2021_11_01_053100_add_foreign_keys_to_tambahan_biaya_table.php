<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToTambahanBiayaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('tambahan_biaya', function (Blueprint $table) {
            $table->foreign(['no_rawat'], 'tambahan_biaya_ibfk_1')->references(['no_rawat'])->on('reg_periksa')->onUpdate('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tambahan_biaya', function (Blueprint $table) {
            $table->dropForeign('tambahan_biaya_ibfk_1');
        });
    }
}
