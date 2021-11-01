<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToRawatJlDrTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('rawat_jl_dr', function (Blueprint $table) {
            $table->foreign(['kd_jenis_prw'], 'rawat_jl_dr_ibfk_2')->references(['kd_jenis_prw'])->on('jns_perawatan')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['kd_dokter'], 'rawat_jl_dr_ibfk_3')->references(['kd_dokter'])->on('dokter')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['no_rawat'], 'rawat_jl_dr_ibfk_5')->references(['no_rawat'])->on('reg_periksa')->onUpdate('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('rawat_jl_dr', function (Blueprint $table) {
            $table->dropForeign('rawat_jl_dr_ibfk_2');
            $table->dropForeign('rawat_jl_dr_ibfk_3');
            $table->dropForeign('rawat_jl_dr_ibfk_5');
        });
    }
}
