<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToMapingTindakanPcareTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('maping_tindakan_pcare', function (Blueprint $table) {
            $table->foreign(['kd_jenis_prw'], 'maping_tindakan_pcare_ibfk_1')->references(['kd_jenis_prw'])->on('jns_perawatan')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('maping_tindakan_pcare', function (Blueprint $table) {
            $table->dropForeign('maping_tindakan_pcare_ibfk_1');
        });
    }
}
