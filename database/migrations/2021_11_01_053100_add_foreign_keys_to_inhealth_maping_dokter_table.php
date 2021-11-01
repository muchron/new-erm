<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToInhealthMapingDokterTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('inhealth_maping_dokter', function (Blueprint $table) {
            $table->foreign(['kd_dokter'], 'inhealth_maping_dokter_ibfk_1')->references(['kd_dokter'])->on('dokter')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('inhealth_maping_dokter', function (Blueprint $table) {
            $table->dropForeign('inhealth_maping_dokter_ibfk_1');
        });
    }
}
