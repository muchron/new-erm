<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToTokopiutangTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('tokopiutang', function (Blueprint $table) {
            $table->foreign(['nip'], 'tokopiutang_ibfk_1')->references(['nip'])->on('petugas')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['no_member'], 'tokopiutang_ibfk_2')->references(['no_member'])->on('tokomember')->onUpdate('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tokopiutang', function (Blueprint $table) {
            $table->dropForeign('tokopiutang_ibfk_1');
            $table->dropForeign('tokopiutang_ibfk_2');
        });
    }
}
