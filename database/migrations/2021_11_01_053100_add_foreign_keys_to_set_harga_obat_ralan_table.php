<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToSetHargaObatRalanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('set_harga_obat_ralan', function (Blueprint $table) {
            $table->foreign(['kd_pj'], 'set_harga_obat_ralan_ibfk_1')->references(['kd_pj'])->on('penjab')->onUpdate('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('set_harga_obat_ralan', function (Blueprint $table) {
            $table->dropForeign('set_harga_obat_ralan_ibfk_1');
        });
    }
}
