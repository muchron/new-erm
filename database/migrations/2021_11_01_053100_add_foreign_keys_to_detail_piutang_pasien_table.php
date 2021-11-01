<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToDetailPiutangPasienTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('detail_piutang_pasien', function (Blueprint $table) {
            $table->foreign(['kd_pj'], 'detail_piutang_pasien_ibfk_3')->references(['kd_pj'])->on('penjab')->onUpdate('CASCADE');
            $table->foreign(['nama_bayar'], 'detail_piutang_pasien_ibfk_4')->references(['nama_bayar'])->on('akun_piutang')->onUpdate('CASCADE');
            $table->foreign(['no_rawat'], 'detail_piutang_pasien_ibfk_5')->references(['no_rawat'])->on('reg_periksa')->onUpdate('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('detail_piutang_pasien', function (Blueprint $table) {
            $table->dropForeign('detail_piutang_pasien_ibfk_3');
            $table->dropForeign('detail_piutang_pasien_ibfk_4');
            $table->dropForeign('detail_piutang_pasien_ibfk_5');
        });
    }
}
