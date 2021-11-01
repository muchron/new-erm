<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToMutasibarangTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('mutasibarang', function (Blueprint $table) {
            $table->foreign(['kode_brng'], 'mutasibarang_ibfk_1')->references(['kode_brng'])->on('databarang')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['kd_bangsaldari'], 'mutasibarang_ibfk_2')->references(['kd_bangsal'])->on('bangsal')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['kd_bangsalke'], 'mutasibarang_ibfk_3')->references(['kd_bangsal'])->on('bangsal')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('mutasibarang', function (Blueprint $table) {
            $table->dropForeign('mutasibarang_ibfk_1');
            $table->dropForeign('mutasibarang_ibfk_2');
            $table->dropForeign('mutasibarang_ibfk_3');
        });
    }
}
