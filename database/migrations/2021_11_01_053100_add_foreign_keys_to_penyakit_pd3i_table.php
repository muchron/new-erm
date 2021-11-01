<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToPenyakitPd3iTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('penyakit_pd3i', function (Blueprint $table) {
            $table->foreign(['kd_penyakit'], 'penyakit_pd3i_ibfk_1')->references(['kd_penyakit'])->on('penyakit')->onUpdate('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('penyakit_pd3i', function (Blueprint $table) {
            $table->dropForeign('penyakit_pd3i_ibfk_1');
        });
    }
}
