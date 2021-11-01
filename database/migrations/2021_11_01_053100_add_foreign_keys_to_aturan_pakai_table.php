<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToAturanPakaiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('aturan_pakai', function (Blueprint $table) {
            $table->foreign(['no_rawat'], 'aturan_pakai_ibfk_1')->references(['no_rawat'])->on('reg_periksa')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['kode_brng'], 'aturan_pakai_ibfk_2')->references(['kode_brng'])->on('databarang')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('aturan_pakai', function (Blueprint $table) {
            $table->dropForeign('aturan_pakai_ibfk_1');
            $table->dropForeign('aturan_pakai_ibfk_2');
        });
    }
}
