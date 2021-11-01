<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToMapingPoliBpjsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('maping_poli_bpjs', function (Blueprint $table) {
            $table->foreign(['kd_poli_rs'], 'maping_poli_bpjs_ibfk_1')->references(['kd_poli'])->on('poliklinik')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('maping_poli_bpjs', function (Blueprint $table) {
            $table->dropForeign('maping_poli_bpjs_ibfk_1');
        });
    }
}
