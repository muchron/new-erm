<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToInacbgKlaimBaruTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('inacbg_klaim_baru', function (Blueprint $table) {
            $table->foreign(['no_sep'], 'inacbg_klaim_baru_ibfk_1')->references(['no_sep'])->on('bridging_sep')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('inacbg_klaim_baru', function (Blueprint $table) {
            $table->dropForeign('inacbg_klaim_baru_ibfk_1');
        });
    }
}
