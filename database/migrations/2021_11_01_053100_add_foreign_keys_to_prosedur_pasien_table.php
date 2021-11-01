<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToProsedurPasienTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('prosedur_pasien', function (Blueprint $table) {
            $table->foreign(['no_rawat'], 'prosedur_pasien_ibfk_1')->references(['no_rawat'])->on('reg_periksa')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['kode'], 'prosedur_pasien_ibfk_2')->references(['kode'])->on('icd9')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('prosedur_pasien', function (Blueprint $table) {
            $table->dropForeign('prosedur_pasien_ibfk_1');
            $table->dropForeign('prosedur_pasien_ibfk_2');
        });
    }
}
