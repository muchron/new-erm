<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToDetailBeriDietTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('detail_beri_diet', function (Blueprint $table) {
            $table->foreign(['no_rawat'], 'detail_beri_diet_ibfk_4')->references(['no_rawat'])->on('reg_periksa')->onUpdate('CASCADE');
            $table->foreign(['kd_kamar'], 'detail_beri_diet_ibfk_5')->references(['kd_kamar'])->on('kamar')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['kd_diet'], 'detail_beri_diet_ibfk_6')->references(['kd_diet'])->on('diet')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('detail_beri_diet', function (Blueprint $table) {
            $table->dropForeign('detail_beri_diet_ibfk_4');
            $table->dropForeign('detail_beri_diet_ibfk_5');
            $table->dropForeign('detail_beri_diet_ibfk_6');
        });
    }
}
