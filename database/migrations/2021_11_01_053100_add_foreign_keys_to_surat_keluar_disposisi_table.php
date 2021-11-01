<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToSuratKeluarDisposisiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('surat_keluar_disposisi', function (Blueprint $table) {
            $table->foreign(['kd_indeks'], 'surat_keluar_disposisi_ibfk_1')->references(['kd'])->on('surat_indeks')->onUpdate('CASCADE');
            $table->foreign(['no_urut'], 'surat_keluar_disposisi_ibfk_2')->references(['no_urut'])->on('surat_keluar')->onUpdate('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('surat_keluar_disposisi', function (Blueprint $table) {
            $table->dropForeign('surat_keluar_disposisi_ibfk_1');
            $table->dropForeign('surat_keluar_disposisi_ibfk_2');
        });
    }
}
