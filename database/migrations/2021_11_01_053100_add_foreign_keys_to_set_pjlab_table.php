<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToSetPjlabTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('set_pjlab', function (Blueprint $table) {
            $table->foreign(['kd_dokterlab'], 'set_pjlab_ibfk_1')->references(['kd_dokter'])->on('dokter')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['kd_dokterrad'], 'set_pjlab_ibfk_2')->references(['kd_dokter'])->on('dokter')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['kd_dokterhemodialisa'], 'set_pjlab_ibfk_3')->references(['kd_dokter'])->on('dokter')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['kd_dokterutd'], 'set_pjlab_ibfk_4')->references(['kd_dokter'])->on('dokter')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('set_pjlab', function (Blueprint $table) {
            $table->dropForeign('set_pjlab_ibfk_1');
            $table->dropForeign('set_pjlab_ibfk_2');
            $table->dropForeign('set_pjlab_ibfk_3');
            $table->dropForeign('set_pjlab_ibfk_4');
        });
    }
}
