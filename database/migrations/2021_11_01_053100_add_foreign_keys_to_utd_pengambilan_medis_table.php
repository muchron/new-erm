<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToUtdPengambilanMedisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('utd_pengambilan_medis', function (Blueprint $table) {
            $table->foreign(['kode_brng'], 'utd_pengambilan_medis_ibfk_1')->references(['kode_brng'])->on('databarang')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['kd_bangsal_dr'], 'utd_pengambilan_medis_ibfk_2')->references(['kd_bangsal'])->on('bangsal')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('utd_pengambilan_medis', function (Blueprint $table) {
            $table->dropForeign('utd_pengambilan_medis_ibfk_1');
            $table->dropForeign('utd_pengambilan_medis_ibfk_2');
        });
    }
}
