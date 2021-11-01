<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToUtdDetailPemisahanKomponenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('utd_detail_pemisahan_komponen', function (Blueprint $table) {
            $table->foreign(['no_donor'], 'utd_detail_pemisahan_komponen_ibfk_1')->references(['no_donor'])->on('utd_pemisahan_komponen')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('utd_detail_pemisahan_komponen', function (Blueprint $table) {
            $table->dropForeign('utd_detail_pemisahan_komponen_ibfk_1');
        });
    }
}
