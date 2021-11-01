<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToIpsrspengeluaranTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('ipsrspengeluaran', function (Blueprint $table) {
            $table->foreign(['nip'], 'ipsrspengeluaran_ibfk_1')->references(['nip'])->on('petugas')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('ipsrspengeluaran', function (Blueprint $table) {
            $table->dropForeign('ipsrspengeluaran_ibfk_1');
        });
    }
}
