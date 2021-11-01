<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToPasswordAsuransiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('password_asuransi', function (Blueprint $table) {
            $table->foreign(['kd_pj'], 'password_asuransi_ibfk_1')->references(['kd_pj'])->on('penjab')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('password_asuransi', function (Blueprint $table) {
            $table->dropForeign('password_asuransi_ibfk_1');
        });
    }
}
