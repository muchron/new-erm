<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToAkunPiutangTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('akun_piutang', function (Blueprint $table) {
            $table->foreign(['kd_rek'], 'akun_piutang_ibfk_1')->references(['kd_rek'])->on('rekening')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['kd_pj'], 'akun_piutang_ibfk_2')->references(['kd_pj'])->on('penjab')->onUpdate('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('akun_piutang', function (Blueprint $table) {
            $table->dropForeign('akun_piutang_ibfk_1');
            $table->dropForeign('akun_piutang_ibfk_2');
        });
    }
}
