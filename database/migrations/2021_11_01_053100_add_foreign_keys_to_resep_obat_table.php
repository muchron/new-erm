<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToResepObatTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('resep_obat', function (Blueprint $table) {
            $table->foreign(['no_rawat'], 'resep_obat_ibfk_3')->references(['no_rawat'])->on('reg_periksa')->onUpdate('CASCADE');
            $table->foreign(['kd_dokter'], 'resep_obat_ibfk_4')->references(['kd_dokter'])->on('dokter')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('resep_obat', function (Blueprint $table) {
            $table->dropForeign('resep_obat_ibfk_3');
            $table->dropForeign('resep_obat_ibfk_4');
        });
    }
}
