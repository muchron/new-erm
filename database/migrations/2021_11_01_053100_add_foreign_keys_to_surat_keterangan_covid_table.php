<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToSuratKeteranganCovidTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('surat_keterangan_covid', function (Blueprint $table) {
            $table->foreign(['no_rawat'], 'surat_keterangan_covid_ibfk_1')->references(['no_rawat'])->on('reg_periksa')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['kd_dokter'], 'surat_keterangan_covid_ibfk_2')->references(['kd_dokter'])->on('dokter')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['nip'], 'surat_keterangan_covid_ibfk_3')->references(['nip'])->on('petugas')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('surat_keterangan_covid', function (Blueprint $table) {
            $table->dropForeign('surat_keterangan_covid_ibfk_1');
            $table->dropForeign('surat_keterangan_covid_ibfk_2');
            $table->dropForeign('surat_keterangan_covid_ibfk_3');
        });
    }
}
