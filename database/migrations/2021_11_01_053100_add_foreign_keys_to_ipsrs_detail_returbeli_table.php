<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToIpsrsDetailReturbeliTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('ipsrs_detail_returbeli', function (Blueprint $table) {
            $table->foreign(['kode_sat'], 'ipsrs_detail_returbeli_ibfk_1')->references(['kode_sat'])->on('kodesatuan')->onUpdate('CASCADE');
            $table->foreign(['kode_brng'], 'ipsrs_detail_returbeli_ibfk_2')->references(['kode_brng'])->on('ipsrsbarang')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['no_retur_beli'], 'ipsrs_detail_returbeli_ibfk_3')->references(['no_retur_beli'])->on('ipsrsreturbeli')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('ipsrs_detail_returbeli', function (Blueprint $table) {
            $table->dropForeign('ipsrs_detail_returbeli_ibfk_1');
            $table->dropForeign('ipsrs_detail_returbeli_ibfk_2');
            $table->dropForeign('ipsrs_detail_returbeli_ibfk_3');
        });
    }
}
