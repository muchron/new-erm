<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToIpsrspemesananTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('ipsrspemesanan', function (Blueprint $table) {
            $table->foreign(['kode_suplier'], 'ipsrspemesanan_ibfk_1')->references(['kode_suplier'])->on('ipsrssuplier')->onUpdate('CASCADE');
            $table->foreign(['nip'], 'ipsrspemesanan_ibfk_2')->references(['nip'])->on('petugas')->onUpdate('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('ipsrspemesanan', function (Blueprint $table) {
            $table->dropForeign('ipsrspemesanan_ibfk_1');
            $table->dropForeign('ipsrspemesanan_ibfk_2');
        });
    }
}
