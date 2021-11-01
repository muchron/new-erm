<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToDetailPemberianObatTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('detail_pemberian_obat', function (Blueprint $table) {
            $table->foreign(['kode_brng'], 'detail_pemberian_obat_ibfk_3')->references(['kode_brng'])->on('databarang')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['no_rawat'], 'detail_pemberian_obat_ibfk_4')->references(['no_rawat'])->on('reg_periksa')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['kd_bangsal'], 'detail_pemberian_obat_ibfk_5')->references(['kd_bangsal'])->on('bangsal')->onUpdate('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('detail_pemberian_obat', function (Blueprint $table) {
            $table->dropForeign('detail_pemberian_obat_ibfk_3');
            $table->dropForeign('detail_pemberian_obat_ibfk_4');
            $table->dropForeign('detail_pemberian_obat_ibfk_5');
        });
    }
}
