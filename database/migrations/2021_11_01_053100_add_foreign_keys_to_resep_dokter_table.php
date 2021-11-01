<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToResepDokterTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('resep_dokter', function (Blueprint $table) {
            $table->foreign(['no_resep'], 'resep_dokter_ibfk_1')->references(['no_resep'])->on('resep_obat')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['kode_brng'], 'resep_dokter_ibfk_2')->references(['kode_brng'])->on('databarang')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('resep_dokter', function (Blueprint $table) {
            $table->dropForeign('resep_dokter_ibfk_1');
            $table->dropForeign('resep_dokter_ibfk_2');
        });
    }
}
