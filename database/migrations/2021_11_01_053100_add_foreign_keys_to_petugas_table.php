<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToPetugasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('petugas', function (Blueprint $table) {
            $table->foreign(['nip'], 'petugas_ibfk_4')->references(['nik'])->on('pegawai')->onUpdate('CASCADE');
            $table->foreign(['kd_jbtn'], 'petugas_ibfk_5')->references(['kd_jbtn'])->on('jabatan')->onUpdate('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('petugas', function (Blueprint $table) {
            $table->dropForeign('petugas_ibfk_4');
            $table->dropForeign('petugas_ibfk_5');
        });
    }
}
