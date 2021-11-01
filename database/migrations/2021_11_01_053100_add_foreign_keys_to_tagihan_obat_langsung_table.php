<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToTagihanObatLangsungTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('tagihan_obat_langsung', function (Blueprint $table) {
            $table->foreign(['no_rawat'], 'tagihan_obat_langsung_ibfk_1')->references(['no_rawat'])->on('reg_periksa')->onUpdate('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tagihan_obat_langsung', function (Blueprint $table) {
            $table->dropForeign('tagihan_obat_langsung_ibfk_1');
        });
    }
}
