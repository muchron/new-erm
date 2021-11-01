<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToUtdPenunjangRusakTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('utd_penunjang_rusak', function (Blueprint $table) {
            $table->foreign(['kode_brng'], 'utd_penunjang_rusak_ibfk_1')->references(['kode_brng'])->on('ipsrsbarang')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['nip'], 'utd_penunjang_rusak_ibfk_2')->references(['nip'])->on('petugas')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('utd_penunjang_rusak', function (Blueprint $table) {
            $table->dropForeign('utd_penunjang_rusak_ibfk_1');
            $table->dropForeign('utd_penunjang_rusak_ibfk_2');
        });
    }
}
