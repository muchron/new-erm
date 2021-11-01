<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToRawatJlDrprTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('rawat_jl_drpr', function (Blueprint $table) {
            $table->foreign(['no_rawat'], 'rawat_jl_drpr_ibfk_1')->references(['no_rawat'])->on('reg_periksa')->onUpdate('CASCADE');
            $table->foreign(['kd_jenis_prw'], 'rawat_jl_drpr_ibfk_2')->references(['kd_jenis_prw'])->on('jns_perawatan')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['kd_dokter'], 'rawat_jl_drpr_ibfk_3')->references(['kd_dokter'])->on('dokter')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['nip'], 'rawat_jl_drpr_ibfk_4')->references(['nip'])->on('petugas')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('rawat_jl_drpr', function (Blueprint $table) {
            $table->dropForeign('rawat_jl_drpr_ibfk_1');
            $table->dropForeign('rawat_jl_drpr_ibfk_2');
            $table->dropForeign('rawat_jl_drpr_ibfk_3');
            $table->dropForeign('rawat_jl_drpr_ibfk_4');
        });
    }
}
