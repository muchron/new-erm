<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToJnsPerawatanInapTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('jns_perawatan_inap', function (Blueprint $table) {
            $table->foreign(['kd_kategori'], 'jns_perawatan_inap_ibfk_7')->references(['kd_kategori'])->on('kategori_perawatan')->onUpdate('CASCADE');
            $table->foreign(['kd_pj'], 'jns_perawatan_inap_ibfk_8')->references(['kd_pj'])->on('penjab')->onUpdate('CASCADE');
            $table->foreign(['kd_bangsal'], 'jns_perawatan_inap_ibfk_9')->references(['kd_bangsal'])->on('bangsal')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('jns_perawatan_inap', function (Blueprint $table) {
            $table->dropForeign('jns_perawatan_inap_ibfk_7');
            $table->dropForeign('jns_perawatan_inap_ibfk_8');
            $table->dropForeign('jns_perawatan_inap_ibfk_9');
        });
    }
}
