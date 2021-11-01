<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToPengajuanCutiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('pengajuan_cuti', function (Blueprint $table) {
            $table->foreign(['nik'], 'pengajuan_cuti_ibfk_1')->references(['nik'])->on('pegawai')->onUpdate('CASCADE');
            $table->foreign(['nik_pj'], 'pengajuan_cuti_ibfk_2')->references(['nik'])->on('pegawai')->onUpdate('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('pengajuan_cuti', function (Blueprint $table) {
            $table->dropForeign('pengajuan_cuti_ibfk_1');
            $table->dropForeign('pengajuan_cuti_ibfk_2');
        });
    }
}
