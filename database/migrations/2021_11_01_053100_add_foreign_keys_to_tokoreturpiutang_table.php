<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToTokoreturpiutangTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('tokoreturpiutang', function (Blueprint $table) {
            $table->foreign(['no_member'], 'tokoreturpiutang_ibfk_1')->references(['no_member'])->on('tokomember')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['nip'], 'tokoreturpiutang_ibfk_2')->references(['nip'])->on('petugas')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tokoreturpiutang', function (Blueprint $table) {
            $table->dropForeign('tokoreturpiutang_ibfk_1');
            $table->dropForeign('tokoreturpiutang_ibfk_2');
        });
    }
}
