<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToJnsPerawatanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('jns_perawatan', function (Blueprint $table) {
            $table->foreign(['kd_kategori'], 'jns_perawatan_ibfk_1')->references(['kd_kategori'])->on('kategori_perawatan')->onUpdate('CASCADE');
            $table->foreign(['kd_pj'], 'jns_perawatan_ibfk_2')->references(['kd_pj'])->on('penjab')->onUpdate('CASCADE');
            $table->foreign(['kd_poli'], 'jns_perawatan_ibfk_3')->references(['kd_poli'])->on('poliklinik')->onUpdate('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('jns_perawatan', function (Blueprint $table) {
            $table->dropForeign('jns_perawatan_ibfk_1');
            $table->dropForeign('jns_perawatan_ibfk_2');
            $table->dropForeign('jns_perawatan_ibfk_3');
        });
    }
}
