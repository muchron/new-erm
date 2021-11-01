<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToBpjsPrbTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('bpjs_prb', function (Blueprint $table) {
            $table->foreign(['no_sep'], 'bpjs_prb_ibfk_1')->references(['no_sep'])->on('bridging_sep')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('bpjs_prb', function (Blueprint $table) {
            $table->dropForeign('bpjs_prb_ibfk_1');
        });
    }
}
