<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToSuratPemesananNonMedisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('surat_pemesanan_non_medis', function (Blueprint $table) {
            $table->foreign(['kode_suplier'], 'surat_pemesanan_non_medis_ibfk_1')->references(['kode_suplier'])->on('ipsrssuplier')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['nip'], 'surat_pemesanan_non_medis_ibfk_2')->references(['nik'])->on('pegawai')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('surat_pemesanan_non_medis', function (Blueprint $table) {
            $table->dropForeign('surat_pemesanan_non_medis_ibfk_1');
            $table->dropForeign('surat_pemesanan_non_medis_ibfk_2');
        });
    }
}
