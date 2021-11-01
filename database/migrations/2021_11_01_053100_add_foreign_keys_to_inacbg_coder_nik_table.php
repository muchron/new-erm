<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToInacbgCoderNikTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('inacbg_coder_nik', function (Blueprint $table) {
            $table->foreign(['nik'], 'inacbg_coder_nik_ibfk_1')->references(['nik'])->on('pegawai')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('inacbg_coder_nik', function (Blueprint $table) {
            $table->dropForeign('inacbg_coder_nik_ibfk_1');
        });
    }
}
