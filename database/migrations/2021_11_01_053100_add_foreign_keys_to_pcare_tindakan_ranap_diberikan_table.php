<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToPcareTindakanRanapDiberikanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('pcare_tindakan_ranap_diberikan', function (Blueprint $table) {
            $table->foreign(['no_rawat'], 'pcare_tindakan_ranap_diberikan_ibfk_1')->references(['no_rawat'])->on('reg_periksa')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['kd_jenis_prw'], 'pcare_tindakan_ranap_diberikan_ibfk_2')->references(['kd_jenis_prw'])->on('maping_tindakan_ranap_pcare')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('pcare_tindakan_ranap_diberikan', function (Blueprint $table) {
            $table->dropForeign('pcare_tindakan_ranap_diberikan_ibfk_1');
            $table->dropForeign('pcare_tindakan_ranap_diberikan_ibfk_2');
        });
    }
}
