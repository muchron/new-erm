<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToIpsrsdetailpengeluaranTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('ipsrsdetailpengeluaran', function (Blueprint $table) {
            $table->foreign(['no_keluar'], 'ipsrsdetailpengeluaran_ibfk_1')->references(['no_keluar'])->on('ipsrspengeluaran')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['kode_sat'], 'ipsrsdetailpengeluaran_ibfk_3')->references(['kode_sat'])->on('kodesatuan')->onUpdate('CASCADE');
            $table->foreign(['kode_brng'], 'ipsrsdetailpengeluaran_ibfk_4')->references(['kode_brng'])->on('ipsrsbarang')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('ipsrsdetailpengeluaran', function (Blueprint $table) {
            $table->dropForeign('ipsrsdetailpengeluaran_ibfk_1');
            $table->dropForeign('ipsrsdetailpengeluaran_ibfk_3');
            $table->dropForeign('ipsrsdetailpengeluaran_ibfk_4');
        });
    }
}
