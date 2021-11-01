<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToInacbgGroupingStage1Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('inacbg_grouping_stage1', function (Blueprint $table) {
            $table->foreign(['no_sep'], 'inacbg_grouping_stage1_ibfk_1')->references(['no_sep'])->on('bridging_sep')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('inacbg_grouping_stage1', function (Blueprint $table) {
            $table->dropForeign('inacbg_grouping_stage1_ibfk_1');
        });
    }
}
