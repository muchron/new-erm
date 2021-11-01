<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToIpsrsdetailbeliTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('ipsrsdetailbeli', function (Blueprint $table) {
            $table->foreign(['no_faktur'], 'ipsrsdetailbeli_ibfk_1')->references(['no_faktur'])->on('ipsrspembelian')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['kode_brng'], 'ipsrsdetailbeli_ibfk_4')->references(['kode_brng'])->on('ipsrsbarang')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['kode_sat'], 'ipsrsdetailbeli_ibfk_5')->references(['kode_sat'])->on('kodesatuan')->onUpdate('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('ipsrsdetailbeli', function (Blueprint $table) {
            $table->dropForeign('ipsrsdetailbeli_ibfk_1');
            $table->dropForeign('ipsrsdetailbeli_ibfk_4');
            $table->dropForeign('ipsrsdetailbeli_ibfk_5');
        });
    }
}
