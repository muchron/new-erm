<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToDetailPeriksaLabTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('detail_periksa_lab', function (Blueprint $table) {
            $table->foreign(['no_rawat'], 'detail_periksa_lab_ibfk_10')->references(['no_rawat'])->on('reg_periksa')->onUpdate('CASCADE');
            $table->foreign(['kd_jenis_prw'], 'detail_periksa_lab_ibfk_11')->references(['kd_jenis_prw'])->on('jns_perawatan_lab')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['id_template'], 'detail_periksa_lab_ibfk_12')->references(['id_template'])->on('template_laboratorium')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('detail_periksa_lab', function (Blueprint $table) {
            $table->dropForeign('detail_periksa_lab_ibfk_10');
            $table->dropForeign('detail_periksa_lab_ibfk_11');
            $table->dropForeign('detail_periksa_lab_ibfk_12');
        });
    }
}
