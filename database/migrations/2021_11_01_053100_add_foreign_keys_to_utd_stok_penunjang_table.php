<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToUtdStokPenunjangTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('utd_stok_penunjang', function (Blueprint $table) {
            $table->foreign(['kode_brng'], 'utd_stok_penunjang_ibfk_1')->references(['kode_brng'])->on('ipsrsbarang')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('utd_stok_penunjang', function (Blueprint $table) {
            $table->dropForeign('utd_stok_penunjang_ibfk_1');
        });
    }
}
