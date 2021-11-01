<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToIpsrsdetailpesanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('ipsrsdetailpesan', function (Blueprint $table) {
            $table->foreign(['no_faktur'], 'ipsrsdetailpesan_ibfk_1')->references(['no_faktur'])->on('ipsrspemesanan')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['kode_brng'], 'ipsrsdetailpesan_ibfk_2')->references(['kode_brng'])->on('ipsrsbarang')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['kode_sat'], 'ipsrsdetailpesan_ibfk_3')->references(['kode_sat'])->on('kodesatuan')->onUpdate('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('ipsrsdetailpesan', function (Blueprint $table) {
            $table->dropForeign('ipsrsdetailpesan_ibfk_1');
            $table->dropForeign('ipsrsdetailpesan_ibfk_2');
            $table->dropForeign('ipsrsdetailpesan_ibfk_3');
        });
    }
}
