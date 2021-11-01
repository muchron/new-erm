<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToKategoriPengeluaranHarianTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('kategori_pengeluaran_harian', function (Blueprint $table) {
            $table->foreign(['kd_rek'], 'kategori_pengeluaran_harian_ibfk_1')->references(['kd_rek'])->on('rekening')->onUpdate('CASCADE');
            $table->foreign(['kd_rek2'], 'kategori_pengeluaran_harian_ibfk_2')->references(['kd_rek'])->on('rekening')->onUpdate('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('kategori_pengeluaran_harian', function (Blueprint $table) {
            $table->dropForeign('kategori_pengeluaran_harian_ibfk_1');
            $table->dropForeign('kategori_pengeluaran_harian_ibfk_2');
        });
    }
}
