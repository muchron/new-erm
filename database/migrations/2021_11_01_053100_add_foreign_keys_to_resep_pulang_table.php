<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToResepPulangTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('resep_pulang', function (Blueprint $table) {
            $table->foreign(['kode_brng'], 'resep_pulang_ibfk_2')->references(['kode_brng'])->on('databarang')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['no_rawat'], 'resep_pulang_ibfk_3')->references(['no_rawat'])->on('reg_periksa')->onUpdate('CASCADE');
            $table->foreign(['kd_bangsal'], 'resep_pulang_ibfk_4')->references(['kd_bangsal'])->on('bangsal')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('resep_pulang', function (Blueprint $table) {
            $table->dropForeign('resep_pulang_ibfk_2');
            $table->dropForeign('resep_pulang_ibfk_3');
            $table->dropForeign('resep_pulang_ibfk_4');
        });
    }
}
