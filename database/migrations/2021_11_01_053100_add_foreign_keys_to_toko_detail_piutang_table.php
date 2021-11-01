<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToTokoDetailPiutangTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('toko_detail_piutang', function (Blueprint $table) {
            $table->foreign(['nota_piutang'], 'toko_detail_piutang_ibfk_1')->references(['nota_piutang'])->on('tokopiutang')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['kode_brng'], 'toko_detail_piutang_ibfk_2')->references(['kode_brng'])->on('tokobarang')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['kode_sat'], 'toko_detail_piutang_ibfk_3')->references(['kode_sat'])->on('kodesatuan')->onUpdate('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('toko_detail_piutang', function (Blueprint $table) {
            $table->dropForeign('toko_detail_piutang_ibfk_1');
            $table->dropForeign('toko_detail_piutang_ibfk_2');
            $table->dropForeign('toko_detail_piutang_ibfk_3');
        });
    }
}
