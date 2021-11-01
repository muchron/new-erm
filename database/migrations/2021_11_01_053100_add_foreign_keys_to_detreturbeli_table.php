<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToDetreturbeliTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('detreturbeli', function (Blueprint $table) {
            $table->foreign(['kode_brng'], 'detreturbeli_ibfk_2')->references(['kode_brng'])->on('databarang')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['no_retur_beli'], 'detreturbeli_ibfk_3')->references(['no_retur_beli'])->on('returbeli')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['kode_sat'], 'detreturbeli_ibfk_4')->references(['kode_sat'])->on('kodesatuan')->onUpdate('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('detreturbeli', function (Blueprint $table) {
            $table->dropForeign('detreturbeli_ibfk_2');
            $table->dropForeign('detreturbeli_ibfk_3');
            $table->dropForeign('detreturbeli_ibfk_4');
        });
    }
}
