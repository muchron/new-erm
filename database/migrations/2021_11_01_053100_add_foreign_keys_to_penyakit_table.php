<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToPenyakitTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('penyakit', function (Blueprint $table) {
            $table->foreign(['kd_ktg'], 'penyakit_ibfk_1')->references(['kd_ktg'])->on('kategori_penyakit')->onUpdate('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('penyakit', function (Blueprint $table) {
            $table->dropForeign('penyakit_ibfk_1');
        });
    }
}
