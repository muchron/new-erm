<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToDetailPenagihanPiutangTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('detail_penagihan_piutang', function (Blueprint $table) {
            $table->foreign(['no_tagihan'], 'detail_penagihan_piutang_ibfk_1')->references(['no_tagihan'])->on('penagihan_piutang')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['no_rawat'], 'detail_penagihan_piutang_ibfk_2')->references(['no_rawat'])->on('reg_periksa')->onUpdate('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('detail_penagihan_piutang', function (Blueprint $table) {
            $table->dropForeign('detail_penagihan_piutang_ibfk_1');
            $table->dropForeign('detail_penagihan_piutang_ibfk_2');
        });
    }
}
