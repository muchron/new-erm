<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToIpsrsbarangTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('ipsrsbarang', function (Blueprint $table) {
            $table->foreign(['kode_sat'], 'ipsrsbarang_ibfk_1')->references(['kode_sat'])->on('kodesatuan')->onUpdate('CASCADE');
            $table->foreign(['jenis'], 'ipsrsbarang_ibfk_2')->references(['kd_jenis'])->on('ipsrsjenisbarang')->onUpdate('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('ipsrsbarang', function (Blueprint $table) {
            $table->dropForeign('ipsrsbarang_ibfk_1');
            $table->dropForeign('ipsrsbarang_ibfk_2');
        });
    }
}
