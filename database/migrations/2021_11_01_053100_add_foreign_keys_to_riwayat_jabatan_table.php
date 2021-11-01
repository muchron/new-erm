<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToRiwayatJabatanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('riwayat_jabatan', function (Blueprint $table) {
            $table->foreign(['id'], 'riwayat_jabatan_ibfk_1')->references(['id'])->on('pegawai')->onUpdate('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('riwayat_jabatan', function (Blueprint $table) {
            $table->dropForeign('riwayat_jabatan_ibfk_1');
        });
    }
}
