<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToGudangbarangTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('gudangbarang', function (Blueprint $table) {
            $table->foreign(['kd_bangsal'], 'gudangbarang_ibfk_1')->references(['kd_bangsal'])->on('bangsal')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['kode_brng'], 'gudangbarang_ibfk_2')->references(['kode_brng'])->on('databarang')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('gudangbarang', function (Blueprint $table) {
            $table->dropForeign('gudangbarang_ibfk_1');
            $table->dropForeign('gudangbarang_ibfk_2');
        });
    }
}
