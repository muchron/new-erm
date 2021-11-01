<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToInhealthTindakanRanapTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('inhealth_tindakan_ranap', function (Blueprint $table) {
            $table->foreign(['kd_jenis_prw'], 'inhealth_tindakan_ranap_ibfk_1')->references(['kd_jenis_prw'])->on('jns_perawatan_inap')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('inhealth_tindakan_ranap', function (Blueprint $table) {
            $table->dropForeign('inhealth_tindakan_ranap_ibfk_1');
        });
    }
}
