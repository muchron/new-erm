<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToBerkasPegawaiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('berkas_pegawai', function (Blueprint $table) {
            $table->foreign(['nik'], 'berkas_pegawai_ibfk_1')->references(['nik'])->on('pegawai')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['kode_berkas'], 'berkas_pegawai_ibfk_2')->references(['kode'])->on('master_berkas_pegawai')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('berkas_pegawai', function (Blueprint $table) {
            $table->dropForeign('berkas_pegawai_ibfk_1');
            $table->dropForeign('berkas_pegawai_ibfk_2');
        });
    }
}
