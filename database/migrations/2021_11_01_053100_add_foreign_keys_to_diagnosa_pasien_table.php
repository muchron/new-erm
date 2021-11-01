<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToDiagnosaPasienTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('diagnosa_pasien', function (Blueprint $table) {
            $table->foreign(['no_rawat'], 'diagnosa_pasien_ibfk_1')->references(['no_rawat'])->on('reg_periksa')->onUpdate('CASCADE');
            $table->foreign(['kd_penyakit'], 'diagnosa_pasien_ibfk_2')->references(['kd_penyakit'])->on('penyakit')->onUpdate('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('diagnosa_pasien', function (Blueprint $table) {
            $table->dropForeign('diagnosa_pasien_ibfk_1');
            $table->dropForeign('diagnosa_pasien_ibfk_2');
        });
    }
}
