<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToBeriBhpRadiologiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('beri_bhp_radiologi', function (Blueprint $table) {
            $table->foreign(['no_rawat'], 'beri_bhp_radiologi_ibfk_4')->references(['no_rawat'])->on('reg_periksa')->onUpdate('CASCADE');
            $table->foreign(['kode_brng'], 'beri_bhp_radiologi_ibfk_5')->references(['kode_brng'])->on('ipsrsbarang')->onUpdate('CASCADE');
            $table->foreign(['kode_sat'], 'beri_bhp_radiologi_ibfk_6')->references(['kode_sat'])->on('kodesatuan')->onUpdate('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('beri_bhp_radiologi', function (Blueprint $table) {
            $table->dropForeign('beri_bhp_radiologi_ibfk_4');
            $table->dropForeign('beri_bhp_radiologi_ibfk_5');
            $table->dropForeign('beri_bhp_radiologi_ibfk_6');
        });
    }
}
