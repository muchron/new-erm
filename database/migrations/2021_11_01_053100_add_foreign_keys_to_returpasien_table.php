<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToReturpasienTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('returpasien', function (Blueprint $table) {
            $table->foreign(['no_rawat'], 'returpasien_ibfk_3')->references(['no_rawat'])->on('reg_periksa')->onUpdate('CASCADE');
            $table->foreign(['kode_brng'], 'returpasien_ibfk_4')->references(['kode_brng'])->on('databarang')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('returpasien', function (Blueprint $table) {
            $table->dropForeign('returpasien_ibfk_3');
            $table->dropForeign('returpasien_ibfk_4');
        });
    }
}
