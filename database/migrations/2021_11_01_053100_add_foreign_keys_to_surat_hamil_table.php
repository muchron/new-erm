<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToSuratHamilTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('surat_hamil', function (Blueprint $table) {
            $table->foreign(['no_rawat'], 'surat_hamil_ibfk_1')->references(['no_rawat'])->on('reg_periksa')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('surat_hamil', function (Blueprint $table) {
            $table->dropForeign('surat_hamil_ibfk_1');
        });
    }
}
