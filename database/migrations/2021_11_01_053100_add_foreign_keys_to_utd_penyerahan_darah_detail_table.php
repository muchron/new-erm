<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToUtdPenyerahanDarahDetailTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('utd_penyerahan_darah_detail', function (Blueprint $table) {
            $table->foreign(['no_penyerahan'], 'utd_penyerahan_darah_detail_ibfk_1')->references(['no_penyerahan'])->on('utd_penyerahan_darah')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['no_kantong'], 'utd_penyerahan_darah_detail_ibfk_2')->references(['no_kantong'])->on('utd_stok_darah')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('utd_penyerahan_darah_detail', function (Blueprint $table) {
            $table->dropForeign('utd_penyerahan_darah_detail_ibfk_1');
            $table->dropForeign('utd_penyerahan_darah_detail_ibfk_2');
        });
    }
}
