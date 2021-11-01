<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToDeteksiDiniCoronaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('deteksi_dini_corona', function (Blueprint $table) {
            $table->foreign(['no_rawat'], 'deteksi_dini_corona_ibfk_1')->references(['no_rawat'])->on('reg_periksa')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['nip'], 'deteksi_dini_corona_ibfk_2')->references(['nip'])->on('petugas')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('deteksi_dini_corona', function (Blueprint $table) {
            $table->dropForeign('deteksi_dini_corona_ibfk_1');
            $table->dropForeign('deteksi_dini_corona_ibfk_2');
        });
    }
}
