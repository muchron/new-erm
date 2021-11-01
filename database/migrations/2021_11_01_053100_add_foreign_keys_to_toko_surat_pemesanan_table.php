<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToTokoSuratPemesananTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('toko_surat_pemesanan', function (Blueprint $table) {
            $table->foreign(['kode_suplier'], 'toko_surat_pemesanan_ibfk_1')->references(['kode_suplier'])->on('tokosuplier')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['nip'], 'toko_surat_pemesanan_ibfk_2')->references(['nik'])->on('pegawai')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('toko_surat_pemesanan', function (Blueprint $table) {
            $table->dropForeign('toko_surat_pemesanan_ibfk_1');
            $table->dropForeign('toko_surat_pemesanan_ibfk_2');
        });
    }
}
