<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToRekapPresensiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('rekap_presensi', function (Blueprint $table) {
            $table->foreign(['id'], 'rekap_presensi_ibfk_1')->references(['id'])->on('pegawai')->onUpdate('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('rekap_presensi', function (Blueprint $table) {
            $table->dropForeign('rekap_presensi_ibfk_1');
        });
    }
}
