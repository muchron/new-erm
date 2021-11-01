<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToUtdPenyerahanDarahTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('utd_penyerahan_darah', function (Blueprint $table) {
            $table->foreign(['nip_cross'], 'utd_penyerahan_darah_ibfk_1')->references(['nip'])->on('petugas')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['kd_rek'], 'utd_penyerahan_darah_ibfk_2')->references(['kd_rek'])->on('rekening')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('utd_penyerahan_darah', function (Blueprint $table) {
            $table->dropForeign('utd_penyerahan_darah_ibfk_1');
            $table->dropForeign('utd_penyerahan_darah_ibfk_2');
        });
    }
}
