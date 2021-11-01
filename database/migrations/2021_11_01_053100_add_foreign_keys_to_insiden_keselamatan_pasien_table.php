<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToInsidenKeselamatanPasienTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('insiden_keselamatan_pasien', function (Blueprint $table) {
            $table->foreign(['no_rawat'], 'insiden_keselamatan_pasien_ibfk_1')->references(['no_rawat'])->on('reg_periksa')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['kode_insiden'], 'insiden_keselamatan_pasien_ibfk_2')->references(['kode_insiden'])->on('insiden_keselamatan')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['nip'], 'insiden_keselamatan_pasien_ibfk_3')->references(['nip'])->on('petugas')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('insiden_keselamatan_pasien', function (Blueprint $table) {
            $table->dropForeign('insiden_keselamatan_pasien_ibfk_1');
            $table->dropForeign('insiden_keselamatan_pasien_ibfk_2');
            $table->dropForeign('insiden_keselamatan_pasien_ibfk_3');
        });
    }
}
