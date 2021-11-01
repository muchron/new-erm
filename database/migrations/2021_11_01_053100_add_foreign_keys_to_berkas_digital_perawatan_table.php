<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToBerkasDigitalPerawatanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('berkas_digital_perawatan', function (Blueprint $table) {
            $table->foreign(['no_rawat'], 'berkas_digital_perawatan_ibfk_1')->references(['no_rawat'])->on('reg_periksa')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['kode'], 'berkas_digital_perawatan_ibfk_2')->references(['kode'])->on('master_berkas_digital')->onUpdate('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('berkas_digital_perawatan', function (Blueprint $table) {
            $table->dropForeign('berkas_digital_perawatan_ibfk_1');
            $table->dropForeign('berkas_digital_perawatan_ibfk_2');
        });
    }
}
