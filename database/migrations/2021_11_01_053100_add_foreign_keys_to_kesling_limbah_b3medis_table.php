<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToKeslingLimbahB3medisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('kesling_limbah_b3medis', function (Blueprint $table) {
            $table->foreign(['nip'], 'kesling_limbah_b3medis_ibfk_1')->references(['nip'])->on('petugas')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('kesling_limbah_b3medis', function (Blueprint $table) {
            $table->dropForeign('kesling_limbah_b3medis_ibfk_1');
        });
    }
}
