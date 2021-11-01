<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToSuratKeluarTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('surat_keluar', function (Blueprint $table) {
            $table->foreign(['kd_lemari'], 'surat_keluar_ibfk_1')->references(['kd'])->on('surat_lemari')->onUpdate('CASCADE');
            $table->foreign(['kd_rak'], 'surat_keluar_ibfk_10')->references(['kd'])->on('surat_rak')->onUpdate('CASCADE');
            $table->foreign(['kd_map'], 'surat_keluar_ibfk_11')->references(['kd'])->on('surat_map')->onUpdate('CASCADE');
            $table->foreign(['kd_ruang'], 'surat_keluar_ibfk_12')->references(['kd'])->on('surat_ruang')->onUpdate('CASCADE');
            $table->foreign(['kd_sifat'], 'surat_keluar_ibfk_13')->references(['kd'])->on('surat_sifat')->onUpdate('CASCADE');
            $table->foreign(['kd_balas'], 'surat_keluar_ibfk_14')->references(['kd'])->on('surat_balas')->onUpdate('CASCADE');
            $table->foreign(['kd_status'], 'surat_keluar_ibfk_15')->references(['kd'])->on('surat_status')->onUpdate('CASCADE');
            $table->foreign(['kd_klasifikasi'], 'surat_keluar_ibfk_16')->references(['kd'])->on('surat_klasifikasi')->onUpdate('CASCADE');
            $table->foreign(['kd_rak'], 'surat_keluar_ibfk_2')->references(['kd'])->on('surat_rak')->onUpdate('CASCADE');
            $table->foreign(['kd_map'], 'surat_keluar_ibfk_3')->references(['kd'])->on('surat_map')->onUpdate('CASCADE');
            $table->foreign(['kd_ruang'], 'surat_keluar_ibfk_4')->references(['kd'])->on('surat_ruang')->onUpdate('CASCADE');
            $table->foreign(['kd_sifat'], 'surat_keluar_ibfk_5')->references(['kd'])->on('surat_sifat')->onUpdate('CASCADE');
            $table->foreign(['kd_balas'], 'surat_keluar_ibfk_6')->references(['kd'])->on('surat_balas')->onUpdate('CASCADE');
            $table->foreign(['kd_status'], 'surat_keluar_ibfk_7')->references(['kd'])->on('surat_status')->onUpdate('CASCADE');
            $table->foreign(['kd_klasifikasi'], 'surat_keluar_ibfk_8')->references(['kd'])->on('surat_klasifikasi')->onUpdate('CASCADE');
            $table->foreign(['kd_lemari'], 'surat_keluar_ibfk_9')->references(['kd'])->on('surat_lemari')->onUpdate('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('surat_keluar', function (Blueprint $table) {
            $table->dropForeign('surat_keluar_ibfk_1');
            $table->dropForeign('surat_keluar_ibfk_10');
            $table->dropForeign('surat_keluar_ibfk_11');
            $table->dropForeign('surat_keluar_ibfk_12');
            $table->dropForeign('surat_keluar_ibfk_13');
            $table->dropForeign('surat_keluar_ibfk_14');
            $table->dropForeign('surat_keluar_ibfk_15');
            $table->dropForeign('surat_keluar_ibfk_16');
            $table->dropForeign('surat_keluar_ibfk_2');
            $table->dropForeign('surat_keluar_ibfk_3');
            $table->dropForeign('surat_keluar_ibfk_4');
            $table->dropForeign('surat_keluar_ibfk_5');
            $table->dropForeign('surat_keluar_ibfk_6');
            $table->dropForeign('surat_keluar_ibfk_7');
            $table->dropForeign('surat_keluar_ibfk_8');
            $table->dropForeign('surat_keluar_ibfk_9');
        });
    }
}
