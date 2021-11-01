<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToDetreturpiutangTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('detreturpiutang', function (Blueprint $table) {
            $table->foreign(['no_retur_piutang'], 'detreturpiutang_ibfk_4')->references(['no_retur_piutang'])->on('returpiutang')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['kode_brng'], 'detreturpiutang_ibfk_5')->references(['kode_brng'])->on('databarang')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['kode_sat'], 'detreturpiutang_ibfk_6')->references(['kode_sat'])->on('kodesatuan')->onUpdate('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('detreturpiutang', function (Blueprint $table) {
            $table->dropForeign('detreturpiutang_ibfk_4');
            $table->dropForeign('detreturpiutang_ibfk_5');
            $table->dropForeign('detreturpiutang_ibfk_6');
        });
    }
}
