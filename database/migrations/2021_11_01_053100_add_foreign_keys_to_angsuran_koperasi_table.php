<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToAngsuranKoperasiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('angsuran_koperasi', function (Blueprint $table) {
            $table->foreign(['id'], 'angsuran_koperasi_ibfk_1')->references(['id'])->on('pegawai')->onUpdate('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('angsuran_koperasi', function (Blueprint $table) {
            $table->dropForeign('angsuran_koperasi_ibfk_1');
        });
    }
}
