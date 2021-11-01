<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToCatatanPasienTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('catatan_pasien', function (Blueprint $table) {
            $table->foreign(['no_rkm_medis'], 'catatan_pasien_ibfk_1')->references(['no_rkm_medis'])->on('pasien')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('catatan_pasien', function (Blueprint $table) {
            $table->dropForeign('catatan_pasien_ibfk_1');
        });
    }
}
