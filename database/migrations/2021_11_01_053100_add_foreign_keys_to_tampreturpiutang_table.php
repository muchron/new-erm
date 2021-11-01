<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToTampreturpiutangTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('tampreturpiutang', function (Blueprint $table) {
            $table->foreign(['kode_brng'], 'tampreturpiutang_ibfk_2')->references(['kode_brng'])->on('databarang')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tampreturpiutang', function (Blueprint $table) {
            $table->dropForeign('tampreturpiutang_ibfk_2');
        });
    }
}
