<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToUtdMedisRusakTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('utd_medis_rusak', function (Blueprint $table) {
            $table->foreign(['kode_brng'], 'utd_medis_rusak_ibfk_1')->references(['kode_brng'])->on('databarang')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['nip'], 'utd_medis_rusak_ibfk_2')->references(['nip'])->on('petugas')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('utd_medis_rusak', function (Blueprint $table) {
            $table->dropForeign('utd_medis_rusak_ibfk_1');
            $table->dropForeign('utd_medis_rusak_ibfk_2');
        });
    }
}
