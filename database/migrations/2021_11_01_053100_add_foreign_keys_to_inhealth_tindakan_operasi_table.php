<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToInhealthTindakanOperasiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('inhealth_tindakan_operasi', function (Blueprint $table) {
            $table->foreign(['kode_paket'], 'inhealth_tindakan_operasi_ibfk_1')->references(['kode_paket'])->on('paket_operasi')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('inhealth_tindakan_operasi', function (Blueprint $table) {
            $table->dropForeign('inhealth_tindakan_operasi_ibfk_1');
        });
    }
}
