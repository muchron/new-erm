<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToSuratSubKlasifikasiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('surat_sub_klasifikasi', function (Blueprint $table) {
            $table->foreign(['kd_klasifikasi'], 'surat_sub_klasifikasi_ibfk_1')->references(['kd'])->on('surat_klasifikasi')->onUpdate('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('surat_sub_klasifikasi', function (Blueprint $table) {
            $table->dropForeign('surat_sub_klasifikasi_ibfk_1');
        });
    }
}
