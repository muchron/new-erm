<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToSetOtomatisTindakanRalanPetugasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('set_otomatis_tindakan_ralan_petugas', function (Blueprint $table) {
            $table->foreign(['kd_jenis_prw'], 'set_otomatis_tindakan_ralan_petugas_ibfk_1')->references(['kd_jenis_prw'])->on('jns_perawatan')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['kd_pj'], 'set_otomatis_tindakan_ralan_petugas_ibfk_2')->references(['kd_pj'])->on('penjab')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('set_otomatis_tindakan_ralan_petugas', function (Blueprint $table) {
            $table->dropForeign('set_otomatis_tindakan_ralan_petugas_ibfk_1');
            $table->dropForeign('set_otomatis_tindakan_ralan_petugas_ibfk_2');
        });
    }
}
