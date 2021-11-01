<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToUtdPengambilanPenunjangTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('utd_pengambilan_penunjang', function (Blueprint $table) {
            $table->foreign(['kode_brng'], 'utd_pengambilan_penunjang_ibfk_1')->references(['kode_brng'])->on('ipsrsbarang')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['nip'], 'utd_pengambilan_penunjang_ibfk_2')->references(['nip'])->on('petugas')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('utd_pengambilan_penunjang', function (Blueprint $table) {
            $table->dropForeign('utd_pengambilan_penunjang_ibfk_1');
            $table->dropForeign('utd_pengambilan_penunjang_ibfk_2');
        });
    }
}
