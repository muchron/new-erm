<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToDetreturjualTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('detreturjual', function (Blueprint $table) {
            $table->foreign(['no_retur_jual'], 'detreturjual_ibfk_1')->references(['no_retur_jual'])->on('returjual')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['kode_brng'], 'detreturjual_ibfk_3')->references(['kode_brng'])->on('databarang')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['kode_sat'], 'detreturjual_ibfk_4')->references(['kode_sat'])->on('kodesatuan')->onUpdate('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('detreturjual', function (Blueprint $table) {
            $table->dropForeign('detreturjual_ibfk_1');
            $table->dropForeign('detreturjual_ibfk_3');
            $table->dropForeign('detreturjual_ibfk_4');
        });
    }
}
