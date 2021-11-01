<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToPnmTnjBulananTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('pnm_tnj_bulanan', function (Blueprint $table) {
            $table->foreign(['id'], 'pnm_tnj_bulanan_ibfk_5')->references(['id'])->on('pegawai')->onUpdate('CASCADE');
            $table->foreign(['id_tnj'], 'pnm_tnj_bulanan_ibfk_6')->references(['id'])->on('master_tunjangan_bulanan')->onUpdate('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('pnm_tnj_bulanan', function (Blueprint $table) {
            $table->dropForeign('pnm_tnj_bulanan_ibfk_5');
            $table->dropForeign('pnm_tnj_bulanan_ibfk_6');
        });
    }
}
