<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToSkriningRawatJalanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('skrining_rawat_jalan', function (Blueprint $table) {
            $table->foreign(['no_rkm_medis'], 'skrining_rawat_jalan_ibfk_1')->references(['no_rkm_medis'])->on('pasien')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['nip'], 'skrining_rawat_jalan_ibfk_2')->references(['nip'])->on('petugas')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('skrining_rawat_jalan', function (Blueprint $table) {
            $table->dropForeign('skrining_rawat_jalan_ibfk_1');
            $table->dropForeign('skrining_rawat_jalan_ibfk_2');
        });
    }
}
