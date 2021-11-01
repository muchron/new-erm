<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToRiwayatNaikGajiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('riwayat_naik_gaji', function (Blueprint $table) {
            $table->foreign(['id'], 'riwayat_naik_gaji_ibfk_1')->references(['id'])->on('pegawai')->onUpdate('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('riwayat_naik_gaji', function (Blueprint $table) {
            $table->dropForeign('riwayat_naik_gaji_ibfk_1');
        });
    }
}
