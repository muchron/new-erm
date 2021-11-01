<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToTokoopnameTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('tokoopname', function (Blueprint $table) {
            $table->foreign(['kode_brng'], 'tokoopname_ibfk_1')->references(['kode_brng'])->on('tokobarang')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tokoopname', function (Blueprint $table) {
            $table->dropForeign('tokoopname_ibfk_1');
        });
    }
}
