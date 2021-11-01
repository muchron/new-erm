<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToSetTarifOnlineTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('set_tarif_online', function (Blueprint $table) {
            $table->foreign(['kd_jenis_prw'], 'set_tarif_online_ibfk_1')->references(['kd_jenis_prw'])->on('jns_perawatan')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('set_tarif_online', function (Blueprint $table) {
            $table->dropForeign('set_tarif_online_ibfk_1');
        });
    }
}
