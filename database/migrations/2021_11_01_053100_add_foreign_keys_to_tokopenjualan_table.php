<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToTokopenjualanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('tokopenjualan', function (Blueprint $table) {
            $table->foreign(['no_member'], 'tokopenjualan_ibfk_1')->references(['no_member'])->on('tokomember')->onUpdate('CASCADE');
            $table->foreign(['kd_rek'], 'tokopenjualan_ibfk_2')->references(['kd_rek'])->on('rekening')->onUpdate('CASCADE');
            $table->foreign(['nip'], 'tokopenjualan_ibfk_3')->references(['nip'])->on('petugas')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['nama_bayar'], 'tokopenjualan_ibfk_4')->references(['nama_bayar'])->on('akun_bayar')->onUpdate('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tokopenjualan', function (Blueprint $table) {
            $table->dropForeign('tokopenjualan_ibfk_1');
            $table->dropForeign('tokopenjualan_ibfk_2');
            $table->dropForeign('tokopenjualan_ibfk_3');
            $table->dropForeign('tokopenjualan_ibfk_4');
        });
    }
}
