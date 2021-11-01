<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToIpsrspembelianTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('ipsrspembelian', function (Blueprint $table) {
            $table->foreign(['nip'], 'ipsrspembelian_ibfk_4')->references(['nip'])->on('petugas')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['kd_rek'], 'ipsrspembelian_ibfk_5')->references(['kd_rek'])->on('akun_bayar')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['kode_suplier'], 'ipsrspembelian_ibfk_6')->references(['kode_suplier'])->on('ipsrssuplier')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('ipsrspembelian', function (Blueprint $table) {
            $table->dropForeign('ipsrspembelian_ibfk_4');
            $table->dropForeign('ipsrspembelian_ibfk_5');
            $table->dropForeign('ipsrspembelian_ibfk_6');
        });
    }
}
