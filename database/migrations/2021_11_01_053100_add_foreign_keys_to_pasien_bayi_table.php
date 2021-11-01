<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToPasienBayiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('pasien_bayi', function (Blueprint $table) {
            $table->foreign(['no_rkm_medis'], 'pasien_bayi_ibfk_1')->references(['no_rkm_medis'])->on('pasien')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['penolong'], 'pasien_bayi_ibfk_2')->references(['nik'])->on('pegawai')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('pasien_bayi', function (Blueprint $table) {
            $table->dropForeign('pasien_bayi_ibfk_1');
            $table->dropForeign('pasien_bayi_ibfk_2');
        });
    }
}
