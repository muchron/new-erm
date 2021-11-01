<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToTokoreturbeliTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('tokoreturbeli', function (Blueprint $table) {
            $table->foreign(['kode_suplier'], 'tokoreturbeli_ibfk_1')->references(['kode_suplier'])->on('tokosuplier')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['nip'], 'tokoreturbeli_ibfk_2')->references(['nip'])->on('petugas')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tokoreturbeli', function (Blueprint $table) {
            $table->dropForeign('tokoreturbeli_ibfk_1');
            $table->dropForeign('tokoreturbeli_ibfk_2');
        });
    }
}
