<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToAkunPenagihanPiutangTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('akun_penagihan_piutang', function (Blueprint $table) {
            $table->foreign(['kd_rek'], 'akun_penagihan_piutang_ibfk_1')->references(['kd_rek'])->on('rekening')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('akun_penagihan_piutang', function (Blueprint $table) {
            $table->dropForeign('akun_penagihan_piutang_ibfk_1');
        });
    }
}
