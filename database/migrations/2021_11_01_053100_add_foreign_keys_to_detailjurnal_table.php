<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToDetailjurnalTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('detailjurnal', function (Blueprint $table) {
            $table->foreign(['no_jurnal'], 'detailjurnal_ibfk_1')->references(['no_jurnal'])->on('jurnal')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['kd_rek'], 'detailjurnal_ibfk_2')->references(['kd_rek'])->on('rekening')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('detailjurnal', function (Blueprint $table) {
            $table->dropForeign('detailjurnal_ibfk_1');
            $table->dropForeign('detailjurnal_ibfk_2');
        });
    }
}
