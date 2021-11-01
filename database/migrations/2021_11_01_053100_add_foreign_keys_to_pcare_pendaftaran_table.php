<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToPcarePendaftaranTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('pcare_pendaftaran', function (Blueprint $table) {
            $table->foreign(['no_rawat'], 'pcare_pendaftaran_ibfk_1')->references(['no_rawat'])->on('reg_periksa')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('pcare_pendaftaran', function (Blueprint $table) {
            $table->dropForeign('pcare_pendaftaran_ibfk_1');
        });
    }
}
