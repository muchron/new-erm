<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToPermintaanDetailPermintaanLabTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('permintaan_detail_permintaan_lab', function (Blueprint $table) {
            $table->foreign(['kd_jenis_prw'], 'permintaan_detail_permintaan_lab_ibfk_2')->references(['kd_jenis_prw'])->on('jns_perawatan_lab')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['id_template'], 'permintaan_detail_permintaan_lab_ibfk_3')->references(['id_template'])->on('template_laboratorium')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['noorder'], 'permintaan_detail_permintaan_lab_ibfk_4')->references(['noorder'])->on('permintaan_lab')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('permintaan_detail_permintaan_lab', function (Blueprint $table) {
            $table->dropForeign('permintaan_detail_permintaan_lab_ibfk_2');
            $table->dropForeign('permintaan_detail_permintaan_lab_ibfk_3');
            $table->dropForeign('permintaan_detail_permintaan_lab_ibfk_4');
        });
    }
}
