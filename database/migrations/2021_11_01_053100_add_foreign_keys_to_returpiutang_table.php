<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToReturpiutangTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('returpiutang', function (Blueprint $table) {
            $table->foreign(['nip'], 'returpiutang_ibfk_3')->references(['nip'])->on('petugas')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['no_rkm_medis'], 'returpiutang_ibfk_4')->references(['no_rkm_medis'])->on('pasien')->onUpdate('CASCADE');
            $table->foreign(['kd_bangsal'], 'returpiutang_ibfk_5')->references(['kd_bangsal'])->on('bangsal')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('returpiutang', function (Blueprint $table) {
            $table->dropForeign('returpiutang_ibfk_3');
            $table->dropForeign('returpiutang_ibfk_4');
            $table->dropForeign('returpiutang_ibfk_5');
        });
    }
}
