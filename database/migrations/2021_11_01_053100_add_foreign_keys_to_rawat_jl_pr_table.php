<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToRawatJlPrTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('rawat_jl_pr', function (Blueprint $table) {
            $table->foreign(['nip'], 'rawat_jl_pr_ibfk_10')->references(['nip'])->on('petugas')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['no_rawat'], 'rawat_jl_pr_ibfk_8')->references(['no_rawat'])->on('reg_periksa')->onUpdate('CASCADE');
            $table->foreign(['kd_jenis_prw'], 'rawat_jl_pr_ibfk_9')->references(['kd_jenis_prw'])->on('jns_perawatan')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('rawat_jl_pr', function (Blueprint $table) {
            $table->dropForeign('rawat_jl_pr_ibfk_10');
            $table->dropForeign('rawat_jl_pr_ibfk_8');
            $table->dropForeign('rawat_jl_pr_ibfk_9');
        });
    }
}
