<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToRekeningtahunTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('rekeningtahun', function (Blueprint $table) {
            $table->foreign(['kd_rek'], 'rekeningtahun_ibfk_1')->references(['kd_rek'])->on('rekening')->onUpdate('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('rekeningtahun', function (Blueprint $table) {
            $table->dropForeign('rekeningtahun_ibfk_1');
        });
    }
}
