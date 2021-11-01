<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToDetailPermintaanMedisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('detail_permintaan_medis', function (Blueprint $table) {
            $table->foreign(['no_permintaan'], 'detail_permintaan_medis_ibfk_1')->references(['no_permintaan'])->on('permintaan_medis')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['kode_brng'], 'detail_permintaan_medis_ibfk_2')->references(['kode_brng'])->on('databarang')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['kode_sat'], 'detail_permintaan_medis_ibfk_3')->references(['kode_sat'])->on('kodesatuan')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('detail_permintaan_medis', function (Blueprint $table) {
            $table->dropForeign('detail_permintaan_medis_ibfk_1');
            $table->dropForeign('detail_permintaan_medis_ibfk_2');
            $table->dropForeign('detail_permintaan_medis_ibfk_3');
        });
    }
}
