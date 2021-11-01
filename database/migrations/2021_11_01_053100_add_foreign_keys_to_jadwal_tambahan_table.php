<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToJadwalTambahanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('jadwal_tambahan', function (Blueprint $table) {
            $table->foreign(['id'], 'jadwal_tambahan_ibfk_1')->references(['id'])->on('pegawai')->onUpdate('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('jadwal_tambahan', function (Blueprint $table) {
            $table->dropForeign('jadwal_tambahan_ibfk_1');
        });
    }
}
