<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToDetailbeliTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('detailbeli', function (Blueprint $table) {
            $table->foreign(['kode_brng'], 'detailbeli_ibfk_5')->references(['kode_brng'])->on('databarang')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['kode_sat'], 'detailbeli_ibfk_6')->references(['kode_sat'])->on('kodesatuan')->onUpdate('CASCADE');
            $table->foreign(['no_faktur'], 'detailbeli_ibfk_7')->references(['no_faktur'])->on('pembelian')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('detailbeli', function (Blueprint $table) {
            $table->dropForeign('detailbeli_ibfk_5');
            $table->dropForeign('detailbeli_ibfk_6');
            $table->dropForeign('detailbeli_ibfk_7');
        });
    }
}
