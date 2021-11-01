<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToMasterTriaseSkala5Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('master_triase_skala5', function (Blueprint $table) {
            $table->foreign(['kode_pemeriksaan'], 'master_triase_skala1_ibfk_5')->references(['kode_pemeriksaan'])->on('master_triase_pemeriksaan')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('master_triase_skala5', function (Blueprint $table) {
            $table->dropForeign('master_triase_skala1_ibfk_5');
        });
    }
}
