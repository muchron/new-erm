<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToSuratCutiHamilTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('surat_cuti_hamil', function (Blueprint $table) {
            $table->foreign(['no_rawat'], 'surat_cuti_hamil_ibfk_1')->references(['no_rawat'])->on('reg_periksa')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('surat_cuti_hamil', function (Blueprint $table) {
            $table->dropForeign('surat_cuti_hamil_ibfk_1');
        });
    }
}
