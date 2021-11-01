<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToPenagihanPiutangTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('penagihan_piutang', function (Blueprint $table) {
            $table->foreign(['nip'], 'penagihan_piutang_ibfk_1')->references(['nik'])->on('pegawai')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['kd_pj'], 'penagihan_piutang_ibfk_2')->references(['kd_pj'])->on('penjab')->onUpdate('CASCADE');
            $table->foreign(['kd_rek'], 'penagihan_piutang_ibfk_3')->references(['kd_rek'])->on('rekening')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['nip_menyetujui'], 'penagihan_piutang_ibfk_4')->references(['nik'])->on('pegawai')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('penagihan_piutang', function (Blueprint $table) {
            $table->dropForeign('penagihan_piutang_ibfk_1');
            $table->dropForeign('penagihan_piutang_ibfk_2');
            $table->dropForeign('penagihan_piutang_ibfk_3');
            $table->dropForeign('penagihan_piutang_ibfk_4');
        });
    }
}
