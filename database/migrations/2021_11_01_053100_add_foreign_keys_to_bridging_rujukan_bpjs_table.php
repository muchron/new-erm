<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToBridgingRujukanBpjsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('bridging_rujukan_bpjs', function (Blueprint $table) {
            $table->foreign(['no_sep'], 'bridging_rujukan_bpjs_ibfk_1')->references(['no_sep'])->on('bridging_sep')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('bridging_rujukan_bpjs', function (Blueprint $table) {
            $table->dropForeign('bridging_rujukan_bpjs_ibfk_1');
        });
    }
}
