<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToDetailObatRacikanJualTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('detail_obat_racikan_jual', function (Blueprint $table) {
            $table->foreign(['nota_jual'], 'detail_obat_racikan_jual_ibfk_1')->references(['nota_jual'])->on('penjualan')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['kode_brng'], 'detail_obat_racikan_jual_ibfk_2')->references(['kode_brng'])->on('databarang')->onUpdate('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('detail_obat_racikan_jual', function (Blueprint $table) {
            $table->dropForeign('detail_obat_racikan_jual_ibfk_1');
            $table->dropForeign('detail_obat_racikan_jual_ibfk_2');
        });
    }
}
