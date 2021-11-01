<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToMonitoringAsuhanGiziTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('monitoring_asuhan_gizi', function (Blueprint $table) {
            $table->foreign(['no_rawat'], 'monitoring_asuhan_gizi_ibfk_1')->references(['no_rawat'])->on('reg_periksa')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['nip'], 'monitoring_asuhan_gizi_ibfk_2')->references(['nip'])->on('petugas')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('monitoring_asuhan_gizi', function (Blueprint $table) {
            $table->dropForeign('monitoring_asuhan_gizi_ibfk_1');
            $table->dropForeign('monitoring_asuhan_gizi_ibfk_2');
        });
    }
}
