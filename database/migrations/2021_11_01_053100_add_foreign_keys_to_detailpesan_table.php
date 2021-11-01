<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToDetailpesanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('detailpesan', function (Blueprint $table) {
            $table->foreign(['kode_brng'], 'detailpesan_ibfk_1')->references(['kode_brng'])->on('databarang')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['kode_sat'], 'detailpesan_ibfk_2')->references(['kode_sat'])->on('kodesatuan')->onUpdate('CASCADE');
            $table->foreign(['no_faktur'], 'detailpesan_ibfk_3')->references(['no_faktur'])->on('pemesanan')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('detailpesan', function (Blueprint $table) {
            $table->dropForeign('detailpesan_ibfk_1');
            $table->dropForeign('detailpesan_ibfk_2');
            $table->dropForeign('detailpesan_ibfk_3');
        });
    }
}
