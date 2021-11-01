<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToKamarInapTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('kamar_inap', function (Blueprint $table) {
            $table->foreign(['kd_kamar'], 'kamar_inap_ibfk_2')->references(['kd_kamar'])->on('kamar')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['no_rawat'], 'kamar_inap_ibfk_3')->references(['no_rawat'])->on('reg_periksa')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('kamar_inap', function (Blueprint $table) {
            $table->dropForeign('kamar_inap_ibfk_2');
            $table->dropForeign('kamar_inap_ibfk_3');
        });
    }
}
