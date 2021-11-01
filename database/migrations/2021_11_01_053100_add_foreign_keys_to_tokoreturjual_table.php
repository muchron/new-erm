<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToTokoreturjualTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('tokoreturjual', function (Blueprint $table) {
            $table->foreign(['no_member'], 'tokoreturjual_ibfk_1')->references(['no_member'])->on('tokomember')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['nip'], 'tokoreturjual_ibfk_2')->references(['nip'])->on('petugas')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tokoreturjual', function (Blueprint $table) {
            $table->dropForeign('tokoreturjual_ibfk_1');
            $table->dropForeign('tokoreturjual_ibfk_2');
        });
    }
}
