<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToPcareObatDiberikanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('pcare_obat_diberikan', function (Blueprint $table) {
            $table->foreign(['no_rawat'], 'pcare_obat_diberikan_ibfk_1')->references(['no_rawat'])->on('reg_periksa')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['kode_brng'], 'pcare_obat_diberikan_ibfk_2')->references(['kode_brng'])->on('maping_obat_pcare')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('pcare_obat_diberikan', function (Blueprint $table) {
            $table->dropForeign('pcare_obat_diberikan_ibfk_1');
            $table->dropForeign('pcare_obat_diberikan_ibfk_2');
        });
    }
}
