<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToPiutangTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('piutang', function (Blueprint $table) {
            $table->foreign(['nip'], 'piutang_ibfk_1')->references(['nip'])->on('petugas')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['no_rkm_medis'], 'piutang_ibfk_2')->references(['no_rkm_medis'])->on('pasien')->onUpdate('CASCADE');
            $table->foreign(['kd_bangsal'], 'piutang_ibfk_3')->references(['kd_bangsal'])->on('bangsal')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('piutang', function (Blueprint $table) {
            $table->dropForeign('piutang_ibfk_1');
            $table->dropForeign('piutang_ibfk_2');
            $table->dropForeign('piutang_ibfk_3');
        });
    }
}
