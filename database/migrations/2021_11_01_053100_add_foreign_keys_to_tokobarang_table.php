<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToTokobarangTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('tokobarang', function (Blueprint $table) {
            $table->foreign(['kode_sat'], 'tokobarang_ibfk_1')->references(['kode_sat'])->on('kodesatuan')->onUpdate('CASCADE');
            $table->foreign(['jenis'], 'tokobarang_ibfk_2')->references(['kd_jenis'])->on('tokojenisbarang')->onUpdate('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tokobarang', function (Blueprint $table) {
            $table->dropForeign('tokobarang_ibfk_1');
            $table->dropForeign('tokobarang_ibfk_2');
        });
    }
}
