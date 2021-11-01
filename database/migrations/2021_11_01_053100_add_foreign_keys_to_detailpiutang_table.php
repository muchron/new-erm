<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToDetailpiutangTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('detailpiutang', function (Blueprint $table) {
            $table->foreign(['nota_piutang'], 'detailpiutang_ibfk_1')->references(['nota_piutang'])->on('piutang')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['kode_brng'], 'detailpiutang_ibfk_2')->references(['kode_brng'])->on('databarang')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['kode_sat'], 'detailpiutang_ibfk_3')->references(['kode_sat'])->on('kodesatuan')->onUpdate('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('detailpiutang', function (Blueprint $table) {
            $table->dropForeign('detailpiutang_ibfk_1');
            $table->dropForeign('detailpiutang_ibfk_2');
            $table->dropForeign('detailpiutang_ibfk_3');
        });
    }
}
