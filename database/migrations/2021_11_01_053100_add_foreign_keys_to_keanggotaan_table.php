<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToKeanggotaanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('keanggotaan', function (Blueprint $table) {
            $table->foreign(['id'], 'keanggotaan_ibfk_3')->references(['id'])->on('pegawai')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['koperasi'], 'keanggotaan_ibfk_4')->references(['stts'])->on('koperasi')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['jamsostek'], 'keanggotaan_ibfk_5')->references(['stts'])->on('jamsostek')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['bpjs'], 'keanggotaan_ibfk_6')->references(['stts'])->on('bpjs')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('keanggotaan', function (Blueprint $table) {
            $table->dropForeign('keanggotaan_ibfk_3');
            $table->dropForeign('keanggotaan_ibfk_4');
            $table->dropForeign('keanggotaan_ibfk_5');
            $table->dropForeign('keanggotaan_ibfk_6');
        });
    }
}
