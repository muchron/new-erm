<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToSetHargaKamarTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('set_harga_kamar', function (Blueprint $table) {
            $table->foreign(['kd_kamar'], 'set_harga_kamar_ibfk_1')->references(['kd_kamar'])->on('kamar')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['kd_pj'], 'set_harga_kamar_ibfk_2')->references(['kd_pj'])->on('penjab')->onUpdate('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('set_harga_kamar', function (Blueprint $table) {
            $table->dropForeign('set_harga_kamar_ibfk_1');
            $table->dropForeign('set_harga_kamar_ibfk_2');
        });
    }
}
