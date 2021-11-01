<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToInacbgDataTerkirim2Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('inacbg_data_terkirim2', function (Blueprint $table) {
            $table->foreign(['no_sep'], 'inacbg_data_terkirim2_ibfk_1')->references(['no_sep'])->on('inacbg_klaim_baru2')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('inacbg_data_terkirim2', function (Blueprint $table) {
            $table->dropForeign('inacbg_data_terkirim2_ibfk_1');
        });
    }
}
