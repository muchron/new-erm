<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToPermintaanPemeriksaanRadiologiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('permintaan_pemeriksaan_radiologi', function (Blueprint $table) {
            $table->foreign(['noorder'], 'permintaan_pemeriksaan_radiologi_ibfk_1')->references(['noorder'])->on('permintaan_radiologi')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['kd_jenis_prw'], 'permintaan_pemeriksaan_radiologi_ibfk_2')->references(['kd_jenis_prw'])->on('jns_perawatan_radiologi')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('permintaan_pemeriksaan_radiologi', function (Blueprint $table) {
            $table->dropForeign('permintaan_pemeriksaan_radiologi_ibfk_1');
            $table->dropForeign('permintaan_pemeriksaan_radiologi_ibfk_2');
        });
    }
}
