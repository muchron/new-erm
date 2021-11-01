<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToRujukMasukTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('rujuk_masuk', function (Blueprint $table) {
            $table->foreign(['no_rawat'], 'rujuk_masuk_ibfk_1')->references(['no_rawat'])->on('reg_periksa')->onUpdate('CASCADE');
            $table->foreign(['kd_penyakit'], 'rujuk_masuk_ibfk_2')->references(['kd_penyakit'])->on('penyakit')->onUpdate('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('rujuk_masuk', function (Blueprint $table) {
            $table->dropForeign('rujuk_masuk_ibfk_1');
            $table->dropForeign('rujuk_masuk_ibfk_2');
        });
    }
}
