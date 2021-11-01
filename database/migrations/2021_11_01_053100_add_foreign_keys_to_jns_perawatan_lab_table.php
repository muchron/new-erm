<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToJnsPerawatanLabTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('jns_perawatan_lab', function (Blueprint $table) {
            $table->foreign(['kd_pj'], 'jns_perawatan_lab_ibfk_1')->references(['kd_pj'])->on('penjab')->onUpdate('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('jns_perawatan_lab', function (Blueprint $table) {
            $table->dropForeign('jns_perawatan_lab_ibfk_1');
        });
    }
}
