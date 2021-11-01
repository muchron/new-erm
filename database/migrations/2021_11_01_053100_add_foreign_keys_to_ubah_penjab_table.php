<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToUbahPenjabTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('ubah_penjab', function (Blueprint $table) {
            $table->foreign(['no_rawat'], 'ubah_penjab_ibfk_4')->references(['no_rawat'])->on('reg_periksa')->onUpdate('CASCADE');
            $table->foreign(['kd_pj1'], 'ubah_penjab_ibfk_5')->references(['kd_pj'])->on('penjab')->onUpdate('CASCADE');
            $table->foreign(['kd_pj2'], 'ubah_penjab_ibfk_6')->references(['kd_pj'])->on('penjab')->onUpdate('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('ubah_penjab', function (Blueprint $table) {
            $table->dropForeign('ubah_penjab_ibfk_4');
            $table->dropForeign('ubah_penjab_ibfk_5');
            $table->dropForeign('ubah_penjab_ibfk_6');
        });
    }
}
