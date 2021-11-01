<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToUtdStokDarahTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('utd_stok_darah', function (Blueprint $table) {
            $table->foreign(['kode_komponen'], 'utd_stok_darah_ibfk_1')->references(['kode'])->on('utd_komponen_darah')->onUpdate('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('utd_stok_darah', function (Blueprint $table) {
            $table->dropForeign('utd_stok_darah_ibfk_1');
        });
    }
}
