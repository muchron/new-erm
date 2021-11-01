<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToDetailjualTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('detailjual', function (Blueprint $table) {
            $table->foreign(['nota_jual'], 'detailjual_ibfk_1')->references(['nota_jual'])->on('penjualan')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['kode_brng'], 'detailjual_ibfk_2')->references(['kode_brng'])->on('databarang')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['kode_sat'], 'detailjual_ibfk_3')->references(['kode_sat'])->on('kodesatuan')->onUpdate('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('detailjual', function (Blueprint $table) {
            $table->dropForeign('detailjual_ibfk_1');
            $table->dropForeign('detailjual_ibfk_2');
            $table->dropForeign('detailjual_ibfk_3');
        });
    }
}
