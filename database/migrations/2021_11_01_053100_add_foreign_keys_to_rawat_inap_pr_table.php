<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToRawatInapPrTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('rawat_inap_pr', function (Blueprint $table) {
            $table->foreign(['nip'], 'rawat_inap_pr_ibfk_3')->references(['nip'])->on('petugas')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['kd_jenis_prw'], 'rawat_inap_pr_ibfk_6')->references(['kd_jenis_prw'])->on('jns_perawatan_inap')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['no_rawat'], 'rawat_inap_pr_ibfk_7')->references(['no_rawat'])->on('reg_periksa')->onUpdate('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('rawat_inap_pr', function (Blueprint $table) {
            $table->dropForeign('rawat_inap_pr_ibfk_3');
            $table->dropForeign('rawat_inap_pr_ibfk_6');
            $table->dropForeign('rawat_inap_pr_ibfk_7');
        });
    }
}
