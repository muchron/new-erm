<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToTampreturjualTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('tampreturjual', function (Blueprint $table) {
            $table->foreign(['kode_brng'], 'tampreturjual_ibfk_3')->references(['kode_brng'])->on('databarang')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tampreturjual', function (Blueprint $table) {
            $table->dropForeign('tampreturjual_ibfk_3');
        });
    }
}
