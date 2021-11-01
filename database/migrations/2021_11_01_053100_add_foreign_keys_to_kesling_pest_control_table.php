<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToKeslingPestControlTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('kesling_pest_control', function (Blueprint $table) {
            $table->foreign(['nip'], 'kesling_pest_control_ibfk_1')->references(['nip'])->on('petugas')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('kesling_pest_control', function (Blueprint $table) {
            $table->dropForeign('kesling_pest_control_ibfk_1');
        });
    }
}
