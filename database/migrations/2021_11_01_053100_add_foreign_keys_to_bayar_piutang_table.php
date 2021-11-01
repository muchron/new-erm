<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToBayarPiutangTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('bayar_piutang', function (Blueprint $table) {
            $table->foreign(['no_rkm_medis'], 'bayar_piutang_ibfk_1')->references(['no_rkm_medis'])->on('pasien')->onUpdate('CASCADE');
            $table->foreign(['kd_rek'], 'bayar_piutang_ibfk_2')->references(['kd_rek'])->on('rekening')->onUpdate('CASCADE');
            $table->foreign(['kd_rek_kontra'], 'bayar_piutang_ibfk_3')->references(['kd_rek'])->on('rekening')->onUpdate('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('bayar_piutang', function (Blueprint $table) {
            $table->dropForeign('bayar_piutang_ibfk_1');
            $table->dropForeign('bayar_piutang_ibfk_2');
            $table->dropForeign('bayar_piutang_ibfk_3');
        });
    }
}
