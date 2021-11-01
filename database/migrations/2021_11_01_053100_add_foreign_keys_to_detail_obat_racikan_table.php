<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToDetailObatRacikanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('detail_obat_racikan', function (Blueprint $table) {
            $table->foreign(['no_rawat'], 'detail_obat_racikan_ibfk_1')->references(['no_rawat'])->on('reg_periksa')->onUpdate('CASCADE');
            $table->foreign(['kode_brng'], 'detail_obat_racikan_ibfk_2')->references(['kode_brng'])->on('databarang')->onUpdate('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('detail_obat_racikan', function (Blueprint $table) {
            $table->dropForeign('detail_obat_racikan_ibfk_1');
            $table->dropForeign('detail_obat_racikan_ibfk_2');
        });
    }
}
