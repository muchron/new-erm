<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToPiutangPasienTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('piutang_pasien', function (Blueprint $table) {
            $table->foreign(['no_rkm_medis'], 'piutang_pasien_ibfk_2')->references(['no_rkm_medis'])->on('pasien')->onUpdate('CASCADE');
            $table->foreign(['no_rawat'], 'piutang_pasien_ibfk_3')->references(['no_rawat'])->on('reg_periksa')->onUpdate('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('piutang_pasien', function (Blueprint $table) {
            $table->dropForeign('piutang_pasien_ibfk_2');
            $table->dropForeign('piutang_pasien_ibfk_3');
        });
    }
}
