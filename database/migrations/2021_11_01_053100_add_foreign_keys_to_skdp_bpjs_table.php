<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToSkdpBpjsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('skdp_bpjs', function (Blueprint $table) {
            $table->foreign(['no_rkm_medis'], 'skdp_bpjs_ibfk_1')->references(['no_rkm_medis'])->on('pasien')->onUpdate('CASCADE');
            $table->foreign(['kd_dokter'], 'skdp_bpjs_ibfk_2')->references(['kd_dokter'])->on('dokter')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('skdp_bpjs', function (Blueprint $table) {
            $table->dropForeign('skdp_bpjs_ibfk_1');
            $table->dropForeign('skdp_bpjs_ibfk_2');
        });
    }
}
