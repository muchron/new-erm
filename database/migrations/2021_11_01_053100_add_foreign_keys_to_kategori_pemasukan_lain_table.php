<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToKategoriPemasukanLainTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('kategori_pemasukan_lain', function (Blueprint $table) {
            $table->foreign(['kd_rek'], 'kategori_pemasukan_lain_ibfk_1')->references(['kd_rek'])->on('rekening')->onUpdate('CASCADE');
            $table->foreign(['kd_rek2'], 'kategori_pemasukan_lain_ibfk_2')->references(['kd_rek'])->on('rekening')->onUpdate('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('kategori_pemasukan_lain', function (Blueprint $table) {
            $table->dropForeign('kategori_pemasukan_lain_ibfk_1');
            $table->dropForeign('kategori_pemasukan_lain_ibfk_2');
        });
    }
}
