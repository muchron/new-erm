<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToDetailNotaInapTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('detail_nota_inap', function (Blueprint $table) {
            $table->foreign(['no_rawat'], 'detail_nota_inap_ibfk_1')->references(['no_rawat'])->on('reg_periksa')->onUpdate('CASCADE');
            $table->foreign(['nama_bayar'], 'detail_nota_inap_ibfk_2')->references(['nama_bayar'])->on('akun_bayar')->onUpdate('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('detail_nota_inap', function (Blueprint $table) {
            $table->dropForeign('detail_nota_inap_ibfk_1');
            $table->dropForeign('detail_nota_inap_ibfk_2');
        });
    }
}
